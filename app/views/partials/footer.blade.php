@section('footer')
	<div class="full_screen">	
		<div class="container_zipo">
		<a href="/" class="logo_footer">
			{{ HTML::image("img/markup/logo_footer.jpg", "logo", ['class'=>'logo_footer_i']) }}
		</a>	
			<nav class="nav_footer">
				<ul class=" nav_footer_ul">
					<li class="@if ($env == 'catalog' || $env == 'byproducer' || $env == 'search') active @endif"><a href="/">Каталог</a></li>
					<li class="@if ($env == 'price') active @endif"><a href="/price">Прайс-лист</a></li>
					<li class="@if ($env == 'delivery') active @endif"><a href="/delivery">Доставка</a></li>
					<li class="@if ($env == 'specials') active @endif"><a href="/specials">Специальные предложения</a></li>
					<li class="@if ($env == 'about') active @endif"><a href="/about">О нас</a></li>
					<li class="@if ($env == 'contacts') active @endif"><a href="/contacts">Контакты</a></li>
				</ul>
			</nav>
			<div class="footer_description_block">
				<p class="footer_description">Кухонное оборудование запасные части<br>
				к оборудованию предприятий общественного питания</p>
				<p class="footer_copy"><i class="fa fa-copyright"></i>2015. "Зип Общепит" All rights reserved</p>
				<p class="footer_link">made by <a href="http://www.dev.bzzz.biz.ua">bzzz! web development studio</a></p>
			</div>	
		</div>
	</div>
	<a id="bcf_trigger" href="http://bettercontactform.com" rel="bcf_trigger">Contact Form</a>
@stop