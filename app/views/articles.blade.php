@extends('layout')
@extends('header')
@extends('footer')
@extends('left_sidebar')
@extends('right_sidebar')

@section('body')
	<div class="main_content">
		<ol class="breadcrumb">
		  <li><a href="/">Главная</a></li>
		  <li class="active">Новости</li>
		</ol>
		<h3 class="articles_main_header">Новости</h3>
		@foreach ($articles as $article)
			<div class="articles_one">
				<div class="article_preview">
					<p class="article_one_date">{{ $article->time }}</p>
					<h2 class="article_preview_header">{{ $article->title }}</h2>
					<div class="article_photo_preview_div">
						{{ HTML::image("img/photos/$article->photo", "$article->title", ['class'=>'article_minimg']) }}
					</div>
					<p class="article_text">{{ $article->body }}</p>
					<a href='/{{$HELP::url_slug(["$article->title"])}}?article_id={{$article->article_id}}' class="articles_all_link"></a>
				</div>
			</div>
		@endforeach
	</div>	
@stop