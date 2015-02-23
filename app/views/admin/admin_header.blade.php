@section('header') 
	<header>
		<div class="admin_to_site">
			<a href="/" class="admin_header_link"><i class="fa fa-home"></i> Зип Общепит</a>
			<a href="/" class="admin_header_link">Перейти на сайт</a>
		</div>
		<div class="btn-group">
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
				<i class="fa fa-user"></i>Привет, admin_zip<!--user_name--> <span class="caret"></span>
			</button>
			<ul class="dropdown-menu" role="menu">
				<li>
					{{ HTML::link('/admin/admin_logout', 'Выйти', ['class' => 'btn btn-default btn_exit']) }}
				</li>
			</ul>
		</div>	
	</header>
@stop