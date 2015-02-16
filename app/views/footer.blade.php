@section('footer')
	<div class="full_screen">	
		<div class="container_zipo">
			<img src="" alt="" class="footer_logo">
			<nav class="navbar navbar-inverse nav_footer">
				<ul class="nav navbar-nav nav_footer_ul">
					<li class="@if ($env == 'catalog' || $env == 'byproducer' || $env == 'search') active @endif"><a href="/">Каталог</a></li>
					<li class="@if ($env == 'price') active @endif"><a href="/price">Прайс-лист</a></li>
					<li class="@if ($env == 'delivery') active @endif"><a href="/delivery">Доставка</a></li>
					<li class="@if ($env == 'specials') active @endif"><a href="/specials">Специальные предложения</a></li>
					<li class="@if ($env == 'about') active @endif"><a href="/about">О нас</a></li>
					<li class="@if ($env == 'contacts') active @endif"><a href="/contacts">Контакты</a></li>
				</ul>
			</nav>
			{{ HTML::image("img/markup/logo.png", "logo", ['class'=>'logo_footer']) }}
			<p class="footer_description">Description of company(very short)</p>
			<p class="footer_copy"><i class="fa fa-copyright"></i>2015. "Зип Общепит" All reghts reserved</p>
			<p class="footer_link">made by <a href="http:www.dev.bzzz.biz.ua">bzzz! web development studio</a></p>
		</div>
		1234567890
	</div>	
@stop