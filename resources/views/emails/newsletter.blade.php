<h1> Welcome to the newsletter of the month! </h1>

<p>
	Here is the list of the last {{ $posts->count() }} articles published during the month:
</p>

<ul>
	@foreach($posts as $post)
		<li>{{ link_to_route('posts.show', $post->title, $post) }}</li>
	@endforeach
</ul>

<p>
	Thank you for subscribing to our newsletter
	Learn to pronounce
</p>

<p>
	{{ link_to_route('newsletter-subscriptions.unsubscribe', "Click here to Unsubscribe", ['email' => $email]) }}
</p>
