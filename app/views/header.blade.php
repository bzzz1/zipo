@section('header') 
	<div class="container">
		<header>
			<hr class="header_top_hr">
			<p class="header_phone">8 (812) 982 33 54</p>
			<p class="header_phone">8 (812) 982 33 54</p>
			<img src="" alt="" class="logo_header">
			<div class="header_description">
				<h1 class="header_descriprion_heading">OOO "ЗИП Общепит"</h1>
				<p class="header_description_text">Lorem ipsum dolor sit amet,<br>
				consectetur adipisicing elit. Obcaecati, saepe.</p>
			</div>	
			<div class="btn-group register" role="group" aria-label="...">
			  <button type="button" class="btn btn-default">Войти</button>
			  <button type="button" class="btn btn-default">Регистрация</button>
			</div>
			<p class="navbar-text header_login">Вы вошли как(some data)</p>
			<!-- <form class="form-inline header_search" role="search">
		         <div class="input-group">
      				
      				<input type="text" class="form-control" id="search" placeholder="Поиск по каталогу">
      			</div>	
		    </form> -->
		    {{ Form::open(array('url' => "/search", 'method' => 'GET', 'class'=>'form-inline header_search')) }}
		    	<i class="fa fa-search"></i>
				{{ Form::text('query', null, ['placeholder'=>"Поиск по каталогу", 'class'=>'form-control', 'id' =>'search']) }} 
			{{ Form::close() }}
		    <nav class="navbar navbar-inverse">
			    <div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Каталог</a></li>
						<li><a href="#">Прайс-лист</a></li>
						<li><a href="#">Доставка</a></li>
						<li><a href="#">Специальные предложения</a></li>
						<li><a href="#">О нас</a></li>
						<li><a href="#">Контакты</a></li>
					</ul>
			    </div><!-- /.navbar-collapse -->
			</nav>
		</header>
	</div>	
@stop