@extends('partials/layout')
@extends('partials/header')
@extends('partials/footer')
@extends('partials/left_sidebar')
@extends('partials/right_sidebar')

@section('body')
	<div class="main_content">
		@if ($env=='specials')
			<ol class="breadcrumb">
			  <li><a href="/">Каталог</a></li>
			  <li class="active">Спецпредложения</li>
			</ol>
			<h3 class="items_main_header universal_heading">Спецпредложения</h3>
		@elseif ($env=='catalog')	
			<ol class="breadcrumb">
			  <li><a href="/">Каталог</a></li>
			  <li>
			  	<a href='{{URL::to($HELP::url_slug(["category", "/", "$current->category"]))}}'> {{$HELP::getNormal($current->category)}} оборудование</a></li>
			  <li class="active">{{$current->subcat}}</li>
			</ol>
			<h3 class="items_page_main_header universal_heading">{{$HELP::getNormal($current->category) }} оборудование</h3>
			<p class="items_subheading">{{$current->subcat}}</p>
		@elseif ($env=='byproducer')
			<ol class="breadcrumb">
			  <li><a href="/">Каталог</a></li>
			  <li class="active">{{$current->producer}}</li>
			</ol>
			<h3 class="items_page_main_header universal_heading">{{$current->producer}}</h3>
		@elseif ($env=='search')
			<h3 class="items_page_main_header universal_heading">Резуьтаты поиска: {{$current}}</h3>
		@endif

		<hr class="main_hr">
		<div class="items_sort_div">	
			<p class="items_sort_by">Сортировать по: </p>

			<?php $q = http_build_query(Input::except(['page', 'order', 'sort'])); ?>
			<select name="items_sort" id="items_sort">
				<option data-link="{{URL::current().'?'.$q.'&sort=title&order=asc' }}">
					имени(а-я)
				</option>
				<option data-link="{{URL::current().'?'.$q.'&sort=title&order=desc' }}">
					имени(я-а)
				</option>
				<option data-link="{{URL::current().'?'.$q.'&sort=price&order=asc' }}">
					цене(вверх)
				</option>
				<option data-link="{{URL::current().'?'.$q.'&sort=price&order=desc' }}">
					цене(вниз)
				</option>
			</select>

		</div>	
		@foreach ($items as $item)
			<div class="@if ($item->hit) item_hit @elseif ($item->special) item_spec @endif items_item_one">
				@if ($item->hit)
					{{ HTML::image("img/markup/hit_prodag.png", "хит продаж", ['class'=>'items_item_flag']) }}
				@elseif ($item->special)
					{{ HTML::image("img/markup/spec_flag.png", "спецпредложение", ['class'=>'items_item_flag']) }}
				@endif
				<div class="items_item_text_block">	
					<div class="items_item_heading">
						<div class="name_and_code">
							<p class="items_item_name">{{$item->title}}</p>
						</div>	
						<p class="items_item_code">Арт: {{$item->code}}</p>
						<div class="items_item_price_div">
							@if (Auth::user()->check())
								<p class="items_item_price">{{$HELP::discount_price($item->price)}}&nbsp</p>
							@else 
								<p class="items_item_price">{{$item->price}}&nbsp</p>
							@endif
							<p class="items_item_currency">{{$item->currency}}.</p>
						</div>	
					</div>
					<div class="items_item_descript">
						{{ HTML::image("img/photos/$item->photo", "$item->title", ['class'=>'items_page_item_img']) }}
						<table class="items_item_text">
							<tr>
								<td colspan='2' class="small_heading">Характеристики</td>
							</tr>
							<tr>
								<td>Бренд:&nbsp&nbsp&nbsp&nbsp</td>
								<td class="items_item_dyn_text">{{$item->producer}}</td>
							</tr>
							<tr>
								<td>Код:</td>
								<td class="items_item_dyn_text">{{$item->code}}</td>
							</tr>
							<tr>
								<td>Тип:&nbsp</td>
								<td class="items_item_dyn_text">{{$item->subcat}}</td>
							</tr>
							<tr>
								<td>Наличие:&nbsp</td>
								@if ($item->procurement)
									<td>В наличии</td>
								@else	
									<td>Под заказ</td>
								@endif	
							</tr>
						</table>
					</div>
				</div>	
				<div class="items_buttons">
			 		{{HTML::link($HELP::url_slug(["/", "$item->category", "/", "$item->subcat", "/", "$item->title"])."?subcat_id=$item->subcat_id&item_id=$item->item_id", 'Подробнее',['class'=>'btn btn-default items_button items_more']) }}
					<a href="/order?item_id={{ $item->item_id }}" class="btn btn-default items_button items_order">Заказать</a>
				</div>	
			</div>
		@endforeach
		<div class="catalog_bottom_pages">
			{{ $items->appends(Request::except('page'))->links('partials/zurb_presenter') }}
			<div class="items_sort_by_main">
				<p class="items sort_by">Показать по: </p>
				<?php $q = http_build_query(Input::except(['page', 'pages_by'])); ?>
				<select name="pages_by" id="pages_by" class="form-control form_control">
					<option data-link="{{ URL::current().'?'.$q.'&pages_by=10' }}">
						10
					</option>
					<option data-link="{{ URL::current().'?'.$q.'&pages_by=50' }}">
						50
					</option>
					<option data-link="{{ URL::current().'?'.$q.'&pages_by=100' }}">
						100
					</option>
					<option data-link="{{ URL::current().'?'.$q.'&pages_by=1000000' }}">
						все
					</option>
				</select>
			</div>
		</div>
	</div>	
@stop