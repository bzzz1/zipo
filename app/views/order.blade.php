@extends('layout')
@extends('header')
@extends('footer')
@extends('left_sidebar')
@extends('right_sidebar')

@section('body')
	<div class="main_content">
		<h2 class="order_heading">Заказать</h2>
		<hr class="main_hr">
		{{ Form::model($item, ['url'=>['/order'], 'method'=>'POST', 'class'=>'item_form']) }}
			<table>
				<tr>
					<td>{{ Form::label('name', 'Имя: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::text('name', null, ['class'=>'change_input', 'ng-model'=>'element.name', 'required']) }}</td>
				</tr>
				<tr>
					<td>{{ Form::label('surname', 'Фамилия: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::textarea('surname', null, ['class'=>'change_input', 'ng-model'=>'element.surname', 'required']) }}</td>
				</tr>
				<tr>
					<td>{{ Form::label('item_title', 'Наименование: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::text('item_title', null, ['class'=>'change_input change_input_short', 'ng-model'=>'element.item_title', 'required']) }}</td>
				</tr>
				<tr>
					<td>{{ Form::label('code', 'Код: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::text('code', null, ['class'=>'change_input change_input_code', 'ng-model'=>'element.item_code', 'required']) }}</td>
				</tr>
				<tr>
					<td>{{ Form::label('phone', 'Телефон: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::text('phone', null, ['class'=>'change_input change_input_code', 'ng-model'=>'element.phone', 'required']) }}</td>
				</tr>
				<tr>
					<td>{{ Form::label('email', 'E-Mail: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::text('email', null, ['class'=>'change_input change_input_code', 'ng-model'=>'element.email', 'required']) }}</td>
				</tr>
				<tr>
					<td>{{ Form::label('company', 'Компания: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::text('company', null, ['class'=>'change_input change_input_code', 'ng-model'=>'element.company']) }}</td>
				</tr>
				<tr>
					<td>{{ Form::label('comment', 'Комментарий: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::text('comment', null, ['class'=>'change_input change_input_code', 'ng-model'=>'element.comment']) }}</td>
				</tr>
			</table>
			{{ Form::submit('Отправить', ['class'=>'submit_field save_button']) }}
		{{ Form::close() }}
	</div>
@stop