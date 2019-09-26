<?php


namespace App\jobs;


use App\NewsletterSubscription;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class UnsubscribeEmailNewsletter implements ShouldQueue {

	use InteractsWithQueue, Queueable, SerializesModels;

	protected $email;

	/**
	 * UnsubscribeEmailNewsletter constructor.
	 * @param $email
	 */
	public function __construct($email)
	{
		$this->email = $email;
	}

	/**
	 *
	 */
	public function handle() {
		$email = $this->email;
		$newsletterSubscription = NewsletterSubscription::where('email', $email)->first();
		if ($newsletterSubscription)
		{
			$newsletterSubscription->delete();
		}
	}

}
