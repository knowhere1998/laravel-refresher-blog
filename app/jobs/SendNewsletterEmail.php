<?php

use App\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Mail;

class SendNewsletterEmail implements ShouldQueue{
	use InteractsWithQueue, Queueable, SerializesModels, DispatchesJobs;

	protected $email;

	public function __construct($email){
		$this->email = $email;
	}

	public function handle() {
		$posts = Post::lastMonth()->get();
		$email = $this->email;

		Mail::send('emails.emails', ['posts' => $posts, 'email' => $email], function ($message) use ($email) {
			$message->from('hello@app.com', config('app.name', 'Laravel'));
			$message->to($email)->subject("This month's Laravel-Blog Newsletter");
		});
	}
}
