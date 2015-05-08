@extends('partials/layout')
@extends('partials/header')
@extends('partials/footer')
@extends('partials/left_sidebar')
@extends('partials/right_sidebar')

@section('body')
	<div class="main_content">
		<ol class="breadcrumb">
		  <li><a href="/">Каталог</a></li>
		  <li>
		  	<a href='{{URL::to($HELP::url_slug(["category", "/", "$current->category"]))}}'> {{$HELP::getNormal($current->category)}} оборудование</a></li>
		  <li class="active">{{$current->subcat}}</li>
		</ol>
		<h3 class="items_page_main_header universal_heading">{{$HELP::getNormal($current->category) }} оборудование</h3>
		<p class="items_subheading">{{$current->subcat}}</p>
		<hr class="main_hr">
		<div class="items_sort_div">	
			<p class="items_sort_by">Сортировать по: </p>

			<?php $q = http_build_query(Input::except(['page', 'order', 'sort'])); ?>
			<select name="items_sort" id="items_sort" class="form-control items_sort_c">
				<option data-link="{{URL::current().'?'.$q.'&sort=title&order=asc' }}">
					имени(а-я)
				</option>
				<option data-link="{{URL::current().'?'.$q.'&sort=title&order=desc' }}">
					имени(я-а)
				</option>
				<option data-link="{{URL::current().'?'.$q.'&sort=price&order=asc' }}">
					цене($-$$$)
				</option>
				<option data-link="{{URL::current().'?'.$q.'&sort=price&order=desc' }}">
					цене($$$-$)
				</option>
			</select>

		</div>	
		<div class="empty_scape">
			<ul>
				@foreach ($produsers as $producer)
					<li>
				 		{{HTML::link($HELP::url_slug(["/", "$current->category", "/", "$current->subcat", "/", "$producer->producer"])."?subcat_id=$current->subcat_id&prod_id=$producer->producer_id", $producer->producer,['class'=>'prod_by_subcat_one']) }}
					</li>
				@endforeach
			</ul>
		</div>
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