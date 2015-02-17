@extends('layout')
@extends('header')
@extends('footer')
@extends('left_sidebar')
@extends('right_sidebar')

@section('body')
	<div class="main_content">
		<h2 class="order_heading">Форма заказа</h2>
		<hr class="main_hr">
		{{ Form::model($item, ['url'=>['/order'], 'method'=>'POST', 'class'=>'item_form']) }}
			<table>
				<tr>
					<td>{{ Form::label('name', 'Имя: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::text('name', null, ['class'=>'change_input', 'required']) }}</td>
				</tr>
				<tr>
					<td>{{ Form::label('surname', 'Фамилия: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::text('surname', null, ['class'=>'change_input', 'required']) }}</td>
				</tr>
				<tr>
					<td>{{ Form::label('title', 'Наименование: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::text('title', null, ['class'=>'change_input change_input_short', 'required']) }}</td>
				</tr>
				<tr>
					<td>{{ Form::label('code', 'Код: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::text('code', null, ['class'=>'change_input change_input_code', 'required']) }}</td>
				</tr>
				<tr>
					<td>{{ Form::label('phone', 'Телефон: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::text('phone', null, ['class'=>'change_input change_input_code', 'required']) }}</td>
				</tr>
				<tr>
					<td>{{ Form::label('email', 'E-Mail: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::text('email', null, ['class'=>'change_input change_input_code', 'required']) }}</td>
				</tr>
				<tr>
					<td>{{ Form::label('company', 'Компания: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::text('company', null, ['class'=>'change_input change_input_code',]) }}</td>
				</tr>
				<tr>
					<td>{{ Form::label('comment', 'Комментарий: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::text('comment', null, ['class'=>'change_input change_input_code',]) }}</td>
				</tr>
			</table>
			{{ Form::submit('Отправить', ['class'=>'submit_field save_button']) }}
		{{ Form::close() }}
	</div>
@stop