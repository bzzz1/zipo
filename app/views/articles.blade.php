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
		<h3 class="articles_main_header universal_heading">Новости</h3>
		@foreach ($articles as $article)
			<div class="articles_one">
				<div class="article_preview">
					<div class="article_photo_preview_div">
						{{ HTML::image("img/photos/$article->photo", "$article->title", ['class'=>'articles_minimg']) }}
					</div>
					<h2 class="article_preview_header">{{ $article->title }}</h2>
					<p class="article_one_date">{{ $article->time }}</p>
					<p class="articles_text">{{ $article->body }}</p>
					<a href='/articles/{{$HELP::url_slug(["$article->title"])}}?article_id={{$article->article_id}}' class="articles_button_read btn btn-default">Читать</a>
					<a href='/{{$HELP::url_slug(["$article->title"])}}?article_id={{$article->article_id}}' class="articles_all_link"></a>
				</div>
			</div>
		@endforeach
	</div>	
@stop