@extends('partials/admin_layout')
@extends('partials/admin_header')
@extends('partials/admin_sidebar')
@extends('partials/admin_footer')

@section('body')
	<h1 class="admin_uni_heading">Список новостей</h1>
	<div class="admin_main_content">
		@foreach ($articles as $article)
			<div class="admin_articles_one">
				<a href='{{URL::to("admin/change_article?article_id=$article->article_id")}}' class="article_link">
					<img src="/img/photos/{{$article->photo}}" alt="{{$article->title}}" class="admin_article_minimg">
				</a>	
				<p class="admin_article_date">
					{{$article->time}}&nbsp&nbsp&nbsp 
					<a href='{{URL::to("admin/change_article?article_id=$article->article_id")}}' class="admin_article_title_1">
						<i class="fa fa-pencil change_article_icon"></i>
					</a>
					{{ Form::open(array('url' => "/admin/delete_article", 'method' => 'POST', 'class'=>'admin_article_one_form')) }}
						<i class="fa fa-times delete_article_icon"></i>
						{{ Form::submit('Сохранить', ['class'=>'hidden']) }}
					{{ Form::close() }}
					<!-- <i class="fa fa-times delete_article_icon"></i>  -->
				</p>
				@if (strLen($article->title) <=60)
					<div class="admin_article_title">
					<a href='{{URL::to("admin/change_article?article_id=$article->article_id")}}' class="admin_article_title_1">{{$article->title}}</a>
                    <a href='{{URL::to("admin/change_article?article_id=$article->article_id")}}' class="admin_article_title_1 admin_article_title_full">{{$article->title}}</a>
                  </div>  
                @else
                  <div class="admin_article_title">
                    <a href='{{URL::to("admin/change_article?article_id=$article->article_id")}}' class="admin_article_title_1">{{mb_substr ($article->title, 0, 27)}} ...</a>
                    <a href='{{URL::to("admin/change_article?article_id=$article->article_id")}}' class="admin_article_title_1 admin_article_title_full">{{$article->title}}</a>
                  </div> 
                @endif 
			</div>
		@endforeach
	</div>
@stop