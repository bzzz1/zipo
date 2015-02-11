@extends('layout')
@extends('header')
@extends('footer')
@extends('left_sidebar')
@extends('right_sidebar')

@section('body')
	<div class="main_content">
		<h2 class="registration_heading">Регистрация</h2>
		<hr class="main_hr">
		@if (isset($error))
			<p class="error">Error</p>
		@endif	
		{{ Form::open(['url'=>'/registration', 'method'=>'POST', 'class'=>'register_form']) }}
			<table>
				<tr>
					<td>{{ Form::label('name', 'Имя: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::text('name', null, ['class'=>'change_input', 'required']) }}</td>
				</tr>
				<tr>
					<td>{{ Form::label('surname', 'Фамилия: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::textarea('surname', null, ['class'=>'change_input', 'required']) }}</td>
				</tr>
				<tr>
					<td>{{ Form::label('company', 'Компания: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::text('company', null, ['class'=>'change_input change_input_code']) }}</td>
				</tr>
				<tr>
					<td>{{ Form::label('email', 'E-Mail: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::text('email', null, ['class'=>'change_input change_input_code', 'required']) }}</td>
				</tr>
				<tr>
					<td>{{ Form::label('phone', 'Телефон: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::text('phone', null, ['class'=>'change_input change_input_code', 'required']) }}</td>
				</tr>
				<tr>
					<td>{{ Form::label('activity', 'Род деятельности: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::select('activity',['Технолог' => 'Технолог','Владелец' => 'Владелец', 'Инжинер' => 'Инженер'], ['class'=>'change_input change_input_code']) }}</td>
				</tr>
				<tr>
					<td>{{ Form::label('password', 'Пароль: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::password('password', ['class'=>'change_input change_input_short','required']) }}</td>
				</tr>
				<tr>
					<td>{{ Form::label('confirm', 'Подтверждение пароля: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::password('confirm', ['class'=>'change_input change_input_code', 'required']) }}</td>
				</tr>
			</table>
			{{ Form::submit('Регистрация', ['class'=>'submit_field save_button']) }}
		{{ Form::close() }}
	</div>
@stop