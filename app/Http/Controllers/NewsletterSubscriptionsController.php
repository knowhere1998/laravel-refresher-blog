<?php

namespace App\Http\Controllers;

use App\NewsletterSubscription;
use App\Http\Requests\NewsletterSubscriptionRequest;
use Illuminate\Http\Request;

class NewsletterSubscriptionsController extends Controller
{
	public function store(NewsletterSubscriptionRequest $request)
	{
		$newsletterSubscription = NewsletterSubscription::create([
			'email' => $request->input('email')
		]);
		return back()->withSuccess(trans('newsletter.created'));
	}
}
