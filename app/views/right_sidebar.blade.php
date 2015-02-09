<div class="right_sidebar"></div>	
	<div class="container_sidebar">
  		<div class="articles">
  			<h3 class="articles_heading">Новости</h3>
            @foreach ($articles as $article)
      			<div class="article">
      				<a href="" class="article_link"><img src="" alt="" class="article_minimage"></a>
      				<p class="article date">{{ $article->time }}</p>
      				<a href="" class="article title">{{ $article->title }}</a>
      			</div>
      			<div class="article">
      				<a href="" class="article_link"><img src="" alt="" class="article_minimage"></a>
      				<p class="article date">{{ $article->time }}</p>
      				<a href="" class="article title">{{ $article->title }}</a>
      			</div>
      			<div class="article">
      				<a href="" class="article_link"><img src="" alt="" class="article_minimage"></a>
      				<p class="article date">{{ $article->time }}</p>
      				<a href="" class="article title">{{ $article->title }}</a>
      			</div>
      			<div class="article">
      				<a href="" class="article_link"><img src="" alt="" class="article_minimage"></a>
      				<p class="article date">{{ $article->time }}</p>
      				<a href="" class="article title">{{ $article->title }}</a>
      			</div>
            @endforeach
  			<a href="" class="articles_all_link">Все новости >> </a>
  		</div>
	</div>