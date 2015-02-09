@extends('layout')
@extends('header')
@extends('footer')

@section('body')
	<p class='article'>{{ $article->title }}</p>
	<p class='article'>{{ $article->body }}</p>
@stop