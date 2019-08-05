<?php

namespace App\Providers;

use App\Comment;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class CommentProvider extends ServiceProvider {
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot() {
		Comment::creating(function ($post) {
			$post->created_at = Carbon::now();
		});
    }
}
