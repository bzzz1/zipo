@extends('layout')
@extends('header')
@extends('footer')
@extends('left_sidebar')
@extends('right_sidebar')

@section('body')
	<div class="main_content">
		<ol class="breadcrumb">
		  <li><a href="/">Главная</a></li>
		  <li><a href="/articles">Новости</a></li>
		  <li class="active">{{ $article->title }}</li>
		</ol>
		<h3 class="article_main_header">Новости</h3>
		<p class="article_heading">{{ $article->title }}</p>
		<p class="article_date">{{ $article->time }}</p>
		{{ HTML::image("img/photos/$article->photo", "$article->title", ['class'=>'article_minimg']) }}
		<hr class="main_hr">
		<p class="article_text">{{ $article->body }}</p>
		<a href="/articles" class="all_news"></a>
	</div>	
@stop