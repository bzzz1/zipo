@section('right_sidebar') 
    <div class="right_sidebar">	
    	<div class="container_sidebar">
      		<div class="articles">
      			<h3 class="articles_heading">Новости</h3>
                @foreach ($articles as $article)
          			<div class="article">
          				<a href="/articles/$article->title?article_id=$article->article_id" class="article_link"><img src="$article->photo" alt="$article->title" class="article_minimage"></a>
          				<p class="article_date">{{--$article->time--}}</p>
          				<a href="/articles/$article->title?article_id=$article->article_id" class="article_title">{{--$article->title--}}</a>
          			</div>
                @endforeach
      			<a href="/articles" class="articles_all_link">Все новости >> </a>
      		</div>
    	</div>
    </div>    
@stop    