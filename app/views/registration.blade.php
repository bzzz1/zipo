@extends('layout')
@extends('header')
@extends('footer')
@extends('left_sidebar')
@extends('right_sidebar')

@section('body')
	<div class="main_content">
		<h2 class="registration_heading universal_heading">Регистрация</h2>
		<hr class="main_hr">
		@if (isset($error))
			<p class="error">Error</p>
		@endif	
		{{ Form::open(['url'=>'/registration', 'method'=>'POST', 'class'=>'register_form']) }}
			<table class="change_input_register">
				<tr>
					<td>{{ Form::label('name', 'Имя: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::text('name', null, ['class'=>'change_input_register', 'required']) }}</td>
				</tr>
				<tr>
					<td>{{ Form::label('surname', 'Фамилия: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::text('surname', null, ['class'=>'change_input_register', 'required']) }}</td>
				</tr>
				<tr>
					<td>{{ Form::label('company', 'Компания: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::text('company', null, ['class'=>'change_input_register change_input_register_code']) }}</td>
				</tr>
				<tr>
					<td>{{ Form::label('email', 'E-Mail: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::text('email', null, ['class'=>'change_input_register change_input_register_code', 'required']) }}</td>
				</tr>
				<tr>
					<td>{{ Form::label('phone', 'Телефон: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::text('phone', null, ['class'=>'change_input_register change_input_register_code', 'required']) }}</td>
				</tr>
				<tr>
					<td>{{ Form::label('activity', 'Род деятельности: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::select('activity',['Технолог' => 'Технолог','Владелец' => 'Владелец', 'Инжинер' => 'Инженер'], ['class'=>'change_input_register change_input_register_code']) }}</td>
				</tr>
				<tr>
					<td>{{ Form::label('password', 'Пароль: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::password('password', ['class'=>'change_input_register change_input_register_short','required']) }}</td>
				</tr>
				<tr>
					<td>{{ Form::label('password_confirmation', 'Подтверждение пароля: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::password('password_confirmation', ['class'=>'change_input_register change_input_register_code', 'required']) }}</td>
				</tr>
			</table>
			{{ Form::submit('Регистрация', ['class'=>'submit_field save_button']) }}
		{{ Form::close() }}
	</div>
@stop