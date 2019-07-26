
<meta charset="utf-8">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="author" content="knowhere.1998">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<!-- Scripts -->
<script>
	window.Laravel = <?php echo json_encode([
		'csrfToken' => csrf_token(),
	]); ?>
</script>
<title>Laravel-Blog</title>
<!-- Styles -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@extends('layouts.styles')
