 @extends('partials/admin_layout')
@extends('partials/admin_header')
@extends('partials/admin_sidebar')
@extends('partials/admin_footer')

@section('body')
	<div class="admin_main_content">
		<h4 class="universal_heading">Деталировка {{$pdf->good}} ({{$producer->producer}})</h4>
		<div class="pdf_content">
			<div class="pdf_reader">
				<p>Открыть деталировку в новом окне</p>
				{{HTML::link("/pdf/$pdf->file", $pdf->good,['target'=>'_blank']) }}
				<p class="load">Загрузить деталировку в формате .pdf</p>
				{{HTML::link("/pdf/$pdf->file", $pdf->good." | загрузка",['target'=>'_blank', 'download'=>'']) }}
			</div>
			<div class="pdf_links">
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
				@foreach ($items as $item)
					<div class="empty_scape">
						@if ($item->hit&&$item->special)
						{{ HTML::image("img/markup/hit_prodag.png", "хит продаж", ['class'=>'items_item_flag']) }}
						{{ HTML::image("img/markup/spec_flag.png", "спецпредложение", ['class'=>'items_item_flag_d']) }}
						@elseif ($item->hit)
							{{ HTML::image("img/markup/hit_prodag.png", "хит продаж", ['class'=>'items_item_flag']) }}
						@elseif ($item->special)
							{{ HTML::image("img/markup/spec_flag.png", "спецпредложение", ['class'=>'items_item_flag']) }}
						@endif	
						<div class="@if ($item->hit) item_hit @elseif ($item->special) item_spec @endif items_item_one">
							<div class="items_item_text_block">	
								<div class="items_item_heading">
									<div class="name_and_code">
										<div class="admin_items_buttons_pdf">
											{{ Form::open(array('url' => "/admin/delete_item_from_pdf?pdf_id=$pdf->pdf_id&item_id=$item->item_id", 'method' => 'POST', 'class'=>'admin_pdf_del_form')) }}
												<i class="fa fa-times delete_items_group_icon fa-lg del_pdf"></i> 
											{{ Form::close() }}	
										</div>
										<div class="items_item_name_div">
											{{HTML::link($HELP::url_slug(["/", $item->subcat->category, "/", $item->subcat->subcat, "/", "$item->title"])."?subcat_id=$item->subcat_id&item_id=$item->item_id", $item->title,['class'=>'items_item_name']) }}
											{{HTML::link($HELP::url_slug(["/", $item->subcat->category, "/", $item->subcat->subcat, "/", "$item->title"])."?subcat_id=$item->subcat_id&item_id=$item->item_id", $item->title,['class'=>'items_item_name_full']) }}
										</div>	
									</div>	
									<div class="items_item_code_div">
										<p class="items_item_code">Арт: {{$item->code}}</p>
										<p class="items_item_code_full">Арт: {{$item->code}}</p>
									</div>	
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
											<td class="items_item_dyn_text">{{$item->producer["producer"]}}</td>
										</tr>
										<tr>
											<td>Код:</td>
											<td class="items_item_dyn_text">{{$item->code}}</td>
										</tr>
										<tr>
											<td>Тип:&nbsp</td>
											<td class="items_item_dyn_text">{{$item->subcat["subcat"]}}</td>
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
						</div>
					</div>	
				@endforeach
			</div>
		</div>
	</div>
@stop