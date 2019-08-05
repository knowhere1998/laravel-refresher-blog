<?php

namespace App\Providers;

use App\Post;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class PostProvider extends ServiceProvider {
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot() {
		Post::creating(function ($post) {
			$post->created_at = Carbon::now();
		});
    }
}
