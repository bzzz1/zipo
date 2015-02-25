@extends('partials/admin_layout')

@section('body')
	<div class='login_section'>
		{{ Form::open(['url' => '/admin_login']) }}
			{{ HTML::image('icons/warning.png', 'Объект под охраной', array('class'=>'admin_warning')) }}
			<h2 class='admin_area'>Объект под охраной</h2>
			{{ Form::text('login', null, ['class'=>'form-control admin_input admin_login', 'placeholder'=>'Логин']) }}
			{{ Form::password('password', ['class'=>'form-control admin_input admin_login', 'placeholder'=>'Пароль']) }}
			{{ Form::submit('Войти', ['class'=>'form-control login_button']) }} 
		{{ Form::close() }}
	</div>
@stop