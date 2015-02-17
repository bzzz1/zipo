@extends('layout')
@extends('header')
@extends('footer')
@extends('left_sidebar')
@extends('right_sidebar')

@section('body')
	<div class="main_content">
		<ol class="breadcrumb">
		  <li><a href="/">Главная</a></li>
		  <li class="active">Контакты</li>
		</ol>
		<h2 class="about_heading universal_heading">О Контакты</h2>
		<hr class="main_hr">
		<div class="about_text_block">
			<p class="about_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, autem.</p>
			<p class="about_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, in!</p>
			<p class="about_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, magni.</p>
			<p class="about_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, aut.</p>
			<p class="about_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, quam?</p>
			<p class="about_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, incidunt.</p>
			<p class="about_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, reprehenderit.</p>
			<p class="about_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, natus.</p>
			<p class="about_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, recusandae.</p>
			<p class="about_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, unde!</p>
		</div>
	<p class="conacts_subheading">Если у вас остались вопросы - напишите нам.</p>
	<div class="contacts_contact_form" id="contact_sorm_ancher">
		{{ Form::open(['url'=>'/feedback', 'method'=>'POST', 'class'=>'item_form admin_info_form']) }}
			<table>
				<tr>
					<td>{{ Form::label('name', 'Имя: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::text('name', null, ['class'=>'change_input', 'required']) }}</td>
				</tr>
				<tr>
					<td>{{ Form::label('company', 'Компания: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::text('company', null, ['class'=>'change_input']) }}</td>
				</tr>
				<tr>
					<td>{{ Form::label('phone', 'Контактный телефон: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::text('phone', null, ['class'=>'change_input']) }}</td>
				</tr>
				<tr>
					<td>{{ Form::label('email', 'E-mail: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::text('email', null, ['class'=>'change_input', 'required']) }}</td>
				</tr>
				<tr>
					<td>{{ Form::label('theme', 'Тема письма: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::text('theme', null, ['class'=>'change_input']) }}</td>
				</tr>
				<tr>
					<td>{{ Form::label('body', 'Текст: ', ['class'=>'main_label']) }}</td>
					<td>{{ Form::text('body', null, ['class'=>'change_input long_textarea', 'required']) }}</td>
				</tr>
			</table>
			{{ Form::submit('Отправить', ['class'=>'submit_field save_button']) }} 
		{{ Form::close() }}
	</div>
	</div>
	<div id="map-container"></div>
	<script>    
          function init_map() {
            var var_location = new google.maps.LatLng(60.002168, 30.353743);
            var isDraggable = $(document).width() > 480 ? true : false;
            var settings = {
                  zoom: 17,
                  center: var_location,
                  mapTypeControl: true,
                  mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                  draggable: isDraggable,
                  scrollwheel: false,
                  disableDoubleClickZoom: true,
                  navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                  mapTypeId: google.maps.MapTypeId.ROADMAP
              };
     
            var var_mapoptions = {
              center: var_location,
              zoom: 17,
              draggable: isDraggable,
              scrollwheel: false,
              disableDoubleClickZoom: true,
              mapTypeId: google.maps.MapTypeId.ROADMAP
            };
     
            var var_marker = new google.maps.Marker({
                position: var_location,
                map: var_map,
                title:"Gaudi"});
     
            var var_map = new google.maps.Map(document.getElementById("map-container"),
                var_mapoptions);
     
            var_marker.setMap(var_map); 
     
          }
     
          google.maps.event.addDomListener(window, 'load', init_map);
     
        </script>
@stop
