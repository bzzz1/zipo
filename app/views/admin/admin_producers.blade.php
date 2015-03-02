@extends('partials/admin_layout')
@extends('partials/admin_header')
@extends('partials/admin_sidebar')
@extends('partials/admin_footer')

@section('body')
	<h1 class="admin_uni_heading">Производители</h1>
	<div class="admin_main_content">
		<a href="" class="admin_producer_add mfp-zoom-out" data-effect="mfp-zoom-out"><i class="fa fa-plus">&nbsp</i>Добавить производителя</a>
			<div class="admin_add_subcategory_div adm_add_pr_div mfp-hide mfp-zoom-out" data-effect="mfp-zoom-out">
				{{ Form::open(['url'=>'/update_producer', 'method'=>'POST', 'class'=>'admin_add_subcategory_form input-group']) }}
					<p class="admin_add_subcategory_title">Добавление производителя</p>
					<div class="change_block admin_select_category_div">
						{{ Form::label('category', 'Происхождение', ['class'=>'admin_uni_label admin_select_category_label']) }}
						{{ Form::select('category', ['Российский' => 'Российский', 'Импортный' => 'Импортный'],'', ['class'=>'form-control admin_select_category_select', 'required', 'form' => 'none']) }}
					</div>
					<div class="change_block admin_select_title_div">
						{{ Form::label('title', 'Название', ['class'=>'admin_uni_label admin_select_title_label']) }}
						{{ Form::text('title', null, ['class'=>'form-control admin_select_title_text', 'required']) }}
					</div>
					{{ Form::submit('Добавить', ['class'=>'btn admin_add_button admin_uni_button ']) }}
				{{ Form::close() }}
			</div> <!--admin_add_subcategory_div-->
		<div class = "groups admin_producers_groups">
			<ul class="producers_list producers_first">
				@foreach ($HELP::columnize($producers, 4, 1) as $producer)
					<li>
						<p class="admin_producer_one">
							{{$producer->producer}} 
							{{-- <a href="/admin/change_producer?producer_id={{$producer->producer_id}}"><i class="fa fa-pencil change_icon"></i></a> --}}
							<a href=""><i class="fa fa-pencil change_icon change_icon_pr"></i></a>
							{{ Form::open(array('url' => "/admin/delete_producer", 'method' => 'POST', 'class'=>'admin_producer_one_form')) }}
								<i class="fa fa-times delete_icon"></i>
								{{-- {{ Form::submit('Сохранить', ['class'=>'hidden']) }} --}}
							{{ Form::close() }}
						</p>
					</li>
				@endforeach
				<div class="admin_change_subcategory_div adm_ch_pd_div mfp-hide mfp-zoom-out" data-effect="mfp-zoom-out">
					{{ Form::open(['url'=>'/update_producer', 'method'=>'POST', 'class'=>'admin_add_subcategory_form input-group']) }}
						<p class="admin_add_subcategory_title">Редактирование подкатегории</p>
						<div class="change_block admin_id_subcategory_div">
							<p class="admin_uni_label admin_id_subcategory_title">ID подкатегории</p>
							<p class="admin_id_subcategory_id">{{$producer->producer_id}}</p>
						</div>
						<div class="change_block admin_select_category_div">
							{{ Form::label('category', 'Категория', ['class'=>'admin_uni_label admin_select_category_label']) }}
							{{ Form::select('category', ['Механическое_en' => 'Механическое_en', 'Тепловое_en' => 'Тепловое_en','Холодильное_en' => 'Холодильное_en','Посудомоечное_en' => 'Посудомоечное_en','Механическое_ru' => 'Механическое_ru','Тепловое_ru' => 'Тепловое_ru','Холодильное_ru' => 'Холодильное_ru','Посудомоечное_ru' => 'Посудомоечное_ru'], '', ['class'=>'form-control admin_select_category_select', 'required', 'form' => 'none']) }}
						</div>
						<div class="change_block admin_select_title_div">
							{{ Form::label('title', 'Название', ['class'=>'admin_uni_label admin_select_title_label']) }}
							{{ Form::text('title', null, ['class'=>'form-control admin_select_title_text', 'required']) }}
						</div>
						{{ Form::submit('Добавить', ['class'=>'btn admin_add_button admin_uni_button ']) }}
					{{ Form::close() }}
				</div> <!--admin_add_subcategory_div-->
			</ul>
			<ul class="producers_list producers_second">
				@foreach ($HELP::columnize($producers, 4, 2) as $producer)
					<li>
						<p class="admin_producer_one">
							{{$producer->producer}} 
							<a href="/admin/change_producer?producer_id={{$producer->producer_id}}"><i class="fa fa-pencil change_icon"></i></a>
							{{ Form::open(array('url' => "/admin/delete_producer", 'method' => 'POST', 'class'=>'admin_producer_one_form')) }}
								<i class="fa fa-times delete_icon"></i>
								{{ Form::submit('Сохранить', ['class'=>'hidden']) }}
							{{ Form::close() }}
						</p>
					</li>	
				@endforeach
			</ul>	
			<ul class="producers_list producers_third">
				@foreach ($HELP::columnize($producers, 4, 3) as $producer)
					<li>
						<p class="admin_producer_one">
							{{$producer->producer}} 
							<a href="/admin/change_producer?producer_id={{$producer->producer_id}}"><i class="fa fa-pencil change_icon"></i></a>
							{{ Form::open(array('url' => "/admin/delete_producer", 'method' => 'POST', 'class'=>'admin_producer_one_form')) }}
								<i class="fa fa-times delete_icon"></i>
								{{ Form::submit('Сохранить', ['class'=>'hidden']) }}
							{{ Form::close() }}
						</p>
					</li>	
				@endforeach
			</ul>
			<ul class="producers_list producers_fourth">
				@foreach ($HELP::columnize($producers, 4, 4) as $producer)
					<li>
						<p class="admin_producer_one">
							{{$producer->producer}} 
							<a href="/admin/change_producer?producer_id={{$producer->producer_id}}"><i class="fa fa-pencil change_icon"></i></a>
							{{ Form::open(array('url' => "/admin/delete_producer", 'method' => 'POST', 'class'=>'admin_producer_one_form')) }}
								<i class="fa fa-times delete_icon"></i>
								{{ Form::submit('Сохранить', ['class'=>'hidden']) }}
							{{ Form::close() }}
						</p>
					</li>	
				@endforeach
			</ul>
		</div> <!-- groups  -->
		<a href="#" class="btn admin_uni_button">Сохранить</a>
	</div>
@stop
