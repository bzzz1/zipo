@extends('partials/layout')
@extends('partials/header')
@extends('partials/footer')
@extends('partials/left_sidebar')
@extends('partials/right_sidebar')
@section('body')
	<div class="main_content">
		<ol class="breadcrumb">
		  <li><a href="/">Каталог</a></li>
		  <li>{{HTML::link("/all_pdf", "Все деталировки") }}</li>
		  <li>{{HTML::link($HELP::url_slug(["/", "all_pdf", "/", "$producer->producer"]), $producer->producer) }}</li>
		  <li class="active">{{$pdf->good}}</li>
		</ol>
		<h4 class="universal_heading">Деталировка {{$pdf->title}}({{$producer->producer}})</h4>
		<hr class="main_hr">
		<div class="pdf_content">
			<div class="pdf_reader">
				<p>Открыть деталировку в новом окне</p>
				{{HTML::link("/$pdf->file", $pdf->good,['target'=>'_blank']) }}
			</div>
			<div class="pdf_links">
				<p>У нас вы можете приобрести следующие запчасти и комплектующие: </p>
				<ul>
					@foreach ($items as $item)
						<li>
							{{HTML::link($HELP::url_slug(["/", "$item->category", "/", "$item->subcat", "/", "$item->title"])."?subcat_id=$item->subcat_id&item_id=$item->item_id", $item->title,['class'=>'']) }}
						</li>
					@endforeach	
				</ul>
			</div>
		</div>
	</div>	
@stop