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
			<div class="btn-group register" role="group" aria-label="...">
			  <button type="button" class="btn btn-default">Войти</button>
			  <button type="button" class="btn btn-default">Регистрация</button>
			</div>
			<p class="navbar-text header_login">Вы вошли как {{-- $user->name --}}</p>
		    {{ Form::open(array('url' => "/search", 'method' => 'GET', 'class'=>'form-inline header_search')) }}
				{{ Form::text('query', null, ['placeholder'=>"Поиск по каталогу", 'class'=>'form-control', 'id' =>'search']) }} 
			{{ Form::close() }}
		    <nav class="navbar navbar-inverse">
			    <div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="/" class="@if ($env == '/') selected @endif">Каталог</a></li>
						<li><a href="/price" class="@if ($env == '/price') selected @endif">Прайс-лист</a></li>
						<li><a href="/delivery" class="@if ($env == '/delivery') selected @endif">Доставка</a></li>
						<li><a href="/specials" class="@if ($env == '/specials') selected @endif">Специальные предложения</a></li>
						<li><a href="/about" class="@if ($env == '/about') selected @endif">О нас</a></li>
						<li><a href="/contacts" class="@if ($env == '/contacts') selected @endif">Контакты</a></li>
					</ul>
			    </div><!-- /.navbar-collapse -->
			</nav>
		</header>
	</div>	
@stop