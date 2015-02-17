@section('header') 
	<header>
		<hr class="header_top_hr">
		<div class="container_zipo">
			<div class="header_right">	
				<div class="header_contacts">
					<p class="header_phone">тел. 8 (812) 982 33 54</p><br>
					<p class="header_phone">тел. 8 (812) 982 33 54</p>
				</div>	
				{{ HTML::image("img/markup/logo.png", "logo", ['class'=>'logo_header']) }}
			</div>	
			<div class="header_description">
				<h1 class="header_descriprion_heading">OOO "ЗИП Общепит"</h1><br>
				<p class="header_description_text">Lorem ipsum dolor sit amet,<br>
				consectetur adipisicing elit. Obcaecati, saepe. <br>Lorem ipsum dolor <br> sit amet.</p>
			</div>	
			<div class="header_reg_adn_log">
				@if (Auth::check())
					<p class="header_login">Вы вошли как {{--$user->email--}}</p>
					<a href="/" class="header_exit_button"></a>
				@else 
					<div class="btn-group btn-group-lg register" role="group" aria-label="reg">
						<button type="button" class="btn btn-default">Войти</button>
						<a href="/registration" class="btn btn-default reg_button">Регистрация</a>
					</div>
					<div class="header_login">
						@if (isset($error))
							<p class="error">Error</p>
						@endif	
						{{ Form::open(['url'=>'/user_login', 'method'=>'POST', 'class'=>'login_form input-group']) }}
							{{ Form::text('email', null, ['class'=>'login_input', 'required', 'placeholder'=>"Ваш e-mail", 'class'=>'login_form_input']) }}
							{{ Form::password('password', ['class'=>'login_input', 'required', 'placeholder'=>"Ваш пароль", 'class'=>'login_form_input']) }}
							{{ Form::submit('Войти', ['class'=>'submit_field']) }}
						{{ Form::close() }}
					</div>	
				@endif
			    {{ Form::open(array('url' => "/search", 'method' => 'GET', 'class'=>'header_search')) }}
					<!-- <span class="input-group-addon" id="sizing-addon1">@</span> -->
					{{ Form::text('query', null, ['placeholder'=>"Поиск по каталогу", 'class'=>'form-control input_search', 'id' =>'search']) }} 
				{{ Form::close() }}
			</div>
		</div>
		<div class="navbar_wraper">		
		    <nav class="navbar navbar-inverse nav_header">
				<ul class="nav navbar-nav">
					<li class="@if ($env == 'catalog' || $env == 'byproducer' || $env == 'search') active @endif"><a href="/">Каталог</a></li>
					<li class="@if ($env == 'price') active @endif"><a href="/price">Прайс-лист</a></li>
					<li class="@if ($env == 'delivery') active @endif"><a href="/delivery">Доставка</a></li>
					<li class="@if ($env == 'specials') active @endif"><a href="/specials">Специальные предложения</a></li>
					<li class="@if ($env == 'about') active @endif"><a href="/about">О нас</a></li>
					<li class="@if ($env == 'contacts') active @endif"><a href="/contacts">Контакты</a></li>
				</ul>
			</nav>
		</div>	
	</header>
@stop