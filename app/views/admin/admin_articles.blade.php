@extends('layout')
@extends('admin/admin_header')
@extends('admin/admin_sidebar')
@extends('admin/admin_footer')

@section('body')
	<h1 class="admin_uni_heading">Список новостей</h1>
	<div class="admin_main_content">
		{{--@foreach ($articles as $article)
			<div class="admin_articles_one">
				<img src="/img/photos/{{$article->photo}}" alt="{{$article->title}}" class="admin_article_minimg">
				<p class="admin_article_date">
					{{$article->time}}&nbsp&nbsp&nbsp 
					<i class="fa fa-pencil change_article_icon"></i>
					<i class="fa fa-times delete_article_icon"> 
				</p>
				@if (strLen($article->title) <=60)
					<div class="admin_article_title">
					<a href='/articles/{{$HELP::url_slug(["$article->title"])}}?article_id={{$article->article_id}}' class="admin_article_title_1">{{$article->title}}</a>
                    <a href='/articles/{{$HELP::url_slug(["$article->title"])}}?article_id={{$article->article_id}}' class="admin_article_title_1 admin_article_title_full">{{$article->title}}</a>
                  </div>  
                @else
                  <div class="admin_article_title">
                    <a href='/articles/{{$HELP::url_slug(["$article->title"])}}?article_id={{$article->article_id}}' class="admin_article_title_1">{{mb_substr ($article->title, 0, 27)}} ...</a>
                    <a href='/articles/{{$HELP::url_slug(["$article->title"])}}?article_id={{$article->article_id}}' class="admin_article_title_1 admin_article_title_full">{{$article->title}}</a>
                  </div> 
                @endif 
			</div>
		@endforeach--}}	
	</div>
@stop