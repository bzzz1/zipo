@section('header') 
	<div class="container">
		<header>
			<hr class="header_top_hr">
			<div class="heder_contacts">
				<p class="header_phone">8 (812) 982 33 54</p><br>
				<p class="header_phone">8 (812) 982 33 54</p>
			</div>	
			<img src="" alt="" class="logo_header">
			<div class="header_description">
				<h1 class="header_descriprion_heading">OOO "ЗИП Общепит"</h1><br>
				<p class="header_description_text">Lorem ipsum dolor sit amet,<br>
				consectetur adipisicing elit. Obcaecati, saepe.</p>
			</div>	
			@if (Auth::check())
				<p class="navbar-text header_login">Вы вошли как {{--$user->email--}}</p>
			@else 
				<div class="btn-group register" role="group" aria-label="...">
					<button type="button" class="btn btn-default">Войти</button>
					<a href="/registration"><button type="button" class="btn btn-default">Регистрация</button></a>
				</div>
				<div class="header_login">
					@if (isset($error))
						<p class="error">Error</p>
					@endif	
					{{ Form::open(['url'=>'/user_login', 'method'=>'POST', 'class'=>'login_form']) }}
						{{ Form::text('email', null, ['class'=>'login_input', 'required', 'placeholder'=>"Ваш e-mail"]) }}
						{{ Form::password('password', ['class'=>'login_input', 'required', 'placeholder'=>"Ваш пароль"]) }}
						{{ Form::submit('Войти', ['class'=>'submit_field save_button']) }}
					{{ Form::close() }}
				</div>	
			@endif
		    {{ Form::open(array('url' => "/search", 'method' => 'GET', 'class'=>'form-inline header_search')) }}
				{{ Form::text('query', null, ['placeholder'=>"Поиск по каталогу", 'class'=>'form-control', 'id' =>'search']) }} 
			{{ Form::close() }}
		    <nav class="navbar navbar-inverse">
			    <div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="@if ($env == 'catalog') active @endif"><a href="/">Каталог</a></li>
						<li class="@if ($env == 'price') active @endif"><a href="/price">Прайс-лист</a></li>
						<li class="@if ($env == 'delivery') active @endif"><a href="/delivery">Доставка</a></li>
						<li class="@if ($env == 'specials') active @endif"><a href="/specials">Специальные предложения</a></li>
						<li class="@if ($env == 'about') active @endif"><a href="/about">О нас</a></li>
						<li class="@if ($env == 'contacts') active @endif"><a href="/contacts">Контакты</a></li>
					</ul>
			    </div><!-- /.navbar-collapse -->
			</nav>
		</header>
	</div>	
@stop