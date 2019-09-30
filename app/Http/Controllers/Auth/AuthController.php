<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Contracts\Provider;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller {

	/**
	 * @param $provider
	 * @return mixed
	 */
	public function redirectToProvider($provider) {
		return Socialite::driver($provider)->redirect();
	}

	/**
	 * Obtain the user information from provider.
	 * @param Provider provider
	 * @return Response
	 */
	public function handleProviderCallback($provider)
	{
		try {
			$user = Socialite::driver($provider)->user();
		} catch (Exception $e) {
			return redirect()->route('login');
		}
		$authUser = $this->findOrCreateUser($user, $provider);
		Auth::login($authUser, true);
		return redirect()->route('home')->withSuccess(trans('auth.logged_in_provider', ['provider' => $provider]));
	}

	/**
	 * Return user if exists; create and return if doesn't
	 *
	 * @param $user
	 * @return User
	 */
	private function findOrCreateUser($user, $provider) {
		$authUser = User::where('provider_id', $user->id)->first();
		if ($authUser) {
			return $authUser;
		}
		return User::create([
			'name' => $user->name,
			'email' => $user->email,
			'provider' => $provider,
			'provider_id' => $user->id
		]);
	}
}
