@extends('partials/layout')
@extends('partials/header')
@extends('partials/footer')
@extends('partials/left_sidebar')
@extends('partials/right_sidebar')

@section('body')
	<div class="main_content">
		<ol class="breadcrumb">
		  <li><a href="/">Главная</a></li>
		  <li class="active">Контакты</li>
		</ol>
		<h2 class="about_heading universal_heading">Контакты</h2>
		<hr class="main_hr">
		<div class="about_text_block">
			<table class="contacts_info_table">
				<tr>
					<td class="info_label">Адрес</td>
					<td>г. Санкт-Петербург, Болотная улица дом 16</td>
				</tr>
				<tr>
					<td class="info_label">Телефон</td>
					<td>+7 (812) 987-22-06</td>
				</tr>
				<tr>
					<td class="info_label">Доп. телефон</td>
					<td>+7 (812) 987-08-81</td>
				</tr>
				<tr>
					<td class="info_label">Эл. почта</td>
					<td><a href="mailto:9872206@mail.ru">9872206@mail.ru</a></td>
				</tr>
				<tr>
					<td class="info_label">Дополнительный сайт</td>
					<td><a href="http://www.mssservice.ds78.ru" target="_blank">mssservice.ds78.ru</a></td>
				</tr>
				<tr>
					<td class="info_label">Контактное лицо</td>
					<td>Дежурный менеджер</td>
				</tr>
				<tr>
					<td class="info_label">Часы работы</td>
					<td>09:00-18:00, без перерыва, по субботам по договоренности</td>
				</tr>
			</table>
		</div>
		<p class="conacts_subheading">Если у вас остались вопросы - напишите нам.</p>
		<div class="contacts_contact_form" id="contact_sorm_ancher">
			{{ Form::open(['url'=>'/feedback', 'method'=>'POST', 'class'=>'item_form admin_info_form']) }}
				<table class="contacts_form_table">
					<tr>
						<td>{{ Form::label('name', 'Имя: ', ['class'=>'main_label']) }}</td>
						<td>{{ Form::text('name', null, ['class'=>'change_input_contacts form-control', 'required']) }}</td>
					</tr>
					<tr>
						<td>{{ Form::label('company', 'Компания: ', ['class'=>'main_label']) }}</td>
						<td>{{ Form::text('company', null, ['class'=>'change_input_contacts form-control']) }}</td>
					</tr>
					<tr>
						<td>{{ Form::label('phone', 'Контактный телефон: ', ['class'=>'main_label']) }}</td>
						<td>{{ Form::text('phone', null, ['class'=>'change_input_contacts form-control']) }}</td>
					</tr>
					<tr>
						<td>{{ Form::label('email', 'E-mail: ', ['class'=>'main_label']) }}</td>
						<td>{{ Form::email('email', null, ['class'=>'change_input_contacts form-control', 'required']) }}</td>
					</tr>
					<tr>
						<td>{{ Form::label('theme', 'Тема письма: ', ['class'=>'main_label']) }}</td>
						<td>{{ Form::text('theme', null, ['class'=>'change_input_contacts form-control']) }}</td>
					</tr>
					<tr>
						<td>{{ Form::label('body', 'Текст: ', ['class'=>'main_label']) }}</td>
						<td>{{ Form::textarea('body', null, ['class'=>'change_input_contacts contacts_form_body form-control', 'required']) }}</td>
					</tr>
				</table>
				{{ Form::submit('Отправить', ['class'=>'btn submit_field save_button']) }} 
			{{ Form::close() }}
		</div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15993.4633220432!2d30.345087900301397!3d59.929106931914134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1425056657661" width="550" height="300" frameborder="0" style="border:0"></iframe>
	</div>
@stop
