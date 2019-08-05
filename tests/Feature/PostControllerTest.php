<?php

use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;
use App\Post;
use Tests\TestCase;

class PostsControllerTest extends TestCase {
	use DatabaseMigrations;

	public function testIndex() {
		$user = factory(User::class)->create();

		$response = $this->actingAs($user)->call('GET', route('home'));

		$response->assertSuccessful();
	}

	public function testIndexHasPosts() {
		$user = factory(User::class)->create();

		$response = $this->actingAs($user)->call('GET', route('home'));

		$response->assertViewHas('posts');
	}

	public function testShow() {
		$user = factory(User::class)->create();
		$post = factory(Post::class)->create();

		$response = $this->actingAs($user)->call('GET', route('posts.show', $post->id));

		$response->assertSuccessful();
	}

	public function testShowHasPost() {
		$user = factory(User::class)->create();
		$post = factory(Post::class)->create();

		$response = $this->actingAs($user)->call('GET', route('posts.show', $post->id));

		$response->assertViewHas('post');
	}

	public function testStore() {
		$user = factory(User::class)->create();
		$params = [
			'title' => 'post',
			'content' => 'hello world'
		];

		$response = $this->actingAs($user)->call('POST', route('posts.store'), $params);

		$this->assertDatabaseHas('posts', $params);
		$response->assertStatus('302');
	}

	public function testStoreFail() {
		$user = factory(User::class)->create();
		$params = [ 'title' => 'post' ];

		$response = $this->actingAs($user)->call('POST', route('posts.store'), $params);

		$response->assertSessionHasErrors(['content']);
		$response->assertStatus('302');
	}
}
