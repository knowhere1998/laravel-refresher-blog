<?php

namespace App\Http\Controllers;

use App\jobs\UnsubscribeEmailNewsletter;
use App\NewsletterSubscription;
use App\Http\Requests\NewsletterSubscriptionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use Validator;

class NewsletterSubscriptionsController extends Controller {
	/**
	 * @param NewsletterSubscriptionRequest $request
	 * @return mixed
	 */
	public function store(NewsletterSubscriptionRequest $request) {
		$newsletterSubscription = NewsletterSubscription::create([
			'email' => $request->input('email')
		]);
		return back()->withSuccess("Email added to the newsletter successfully");
	}

	/**
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function unsubscribe(Request $request) {
		$validator = Validator::make($request->all(), [
			'email' => 'required|email|exists:newsletter_subscriptions,email'
		]);
		if ($validator->fails())
		{
			return redirect()->route('home')->withErrors($validator);
		}
		$this->dispatch(new UnsubscribeEmailNewsletter($request->input('email')));
		Session::flash('success', trans('newsletter.unsubscribed'));
		return view('emails.unsubscribed')->withSuccess("The request for unsubscription has been taken into account.");
	}
}
