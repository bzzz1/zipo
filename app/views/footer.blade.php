@section('footer')
	<div class="container">
		<img src="" alt="" class="footer_logo">
		<ul class="nav navbar-nav">
			<li class="active"><a href="#" class="@if ($env == '/') selected @endif">Каталог</a></li>
			<li><a href="#" class="@if ($env == '/price') selected @endif">Прайс-лист</a></li>
			<li><a href="#" class="@if ($env == '/delivery') selected @endif">Доставка</a></li>
			<li><a href="#" class="@if ($env == '/specials') selected @endif">Специальные предложения</a></li>
			<li><a href="#" class="@if ($env == '/about') selected @endif">О нас</a></li>
			<li><a href="#" class="@if ($env == '/contacts') selected @endif">Контакты</a></li>
		</ul>
		<p class="footer_description">Description of company(very short)</p>
		<p class="footer_copy"><i class="fa fa-copyright"></i>2015. "Зип Общепит" All reghts reserved</p>
		<p class="footer_link">made by<a href="http:www.dev.bzzz.biz.ua">bzzz! web development studio</a></p>
	</div>
@stop