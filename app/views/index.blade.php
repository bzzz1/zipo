@extends('layout')
@extends('header')
@extends('footer')

@section('body')
	@foreach ($articles as $article)
		<p class='title'>{{ $article->title }}</p>
		<br>
		<p class='time'>{{ $article->time }}</p>
		<br>
	@endforeach
@stop