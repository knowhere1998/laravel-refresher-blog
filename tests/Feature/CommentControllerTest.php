<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;
use App\Post;
use App\Comment;
use Tests\TestCase;

class CommentsControllerTest extends TestCase {
	use DatabaseMigrations;
	public function testStore() {
		$user = factory(User::class)->create();
		$post = factory(Post::class)->create();
		$params = [
			'post_id' => $post->id,
			'content' => 'hello world'
		];
		$response = $this->actingAs($user)->call('POST', route('comments.store'), $params);
		$this->assertDatabaseHas('comments', $params);
		$response->assertStatus('302');
	}
	public function testStoreFail() {
		$user = factory(User::class)->create();
		$params = [ 'content' => 'hello world' ];
		$response = $this->actingAs($user)->call('POST', route('comments.store'), $params);
		$response->assertStatus('404');
	}
	public function testDestroy() {
		$user = factory(User::class)->create();
		$comment = factory(Comment::class)->create(['author_id' => $user->id]);
		$params = [ 'id' => $comment->id ];
		$response = $this->actingAs($user)->call('DELETE', route('comments.destroy', $params));
		$this->assertDatabaseMissing('comments', $params);
		$response->assertRedirect(['posts.show', ['id' => $comment->post_id]]);
	}
	public function testDestroyFail() {
		$user = factory(User::class)->create();
		$comment = factory(Comment::class)->create();
		$params = [ 'id' => $comment->id ];
		$response = $this->actingAs($user)->call('DELETE', route('comments.destroy', $params));
		$this->assertDatabaseHas('comments', $params);
		$response->assertStatus('403');
	}
}
