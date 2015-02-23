@extends('partials/layout')
@extends('partials/header')
@extends('partials/footer')
@extends('partials/left_sidebar')
@extends('partials/right_sidebar')

@section('body')
	<div class="main_content">
		<ol class="breadcrumb">
		  <li><a href="/">Главная</a></li>
		  <li><a href="/articles">Новости</a></li>
		  <li class="active">{{ $article->title }}</li>
		</ol>
		<h3 class="article_main_header universal_heading">Новости</h3>
		{{ HTML::image("img/photos/$article->photo", "$article->title", ['class'=>'article_minimg']) }}
		<p class="article_heading">{{ $article->title }}</p>
		<p class="article_date">{{ $article->time }}</p>
		<hr class="main_hr">
		<p class="article_text">{{ $article->body }}</p>
		<a href="/articles" class="all_news">Перейти ко всем новостям >></a>
	</div>	
@stop