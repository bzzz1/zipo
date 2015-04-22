@extends('partials/layout')
@extends('partials/header')
@extends('partials/footer')
@extends('partials/left_sidebar')
@extends('partials/right_sidebar')
@section('body')
	<div class="main_content">
		<ol class="breadcrumb">
		  <li><a href="/">Каталог</a></li>
		  {{-- <li>{{HTML::link($HELP::url_slug(["/", "category", "/", "$item->category"]), $HELP::getNormal($item->category)) }}</li> --}}
		  {{-- <li>{{HTML::link($HELP::url_slug(["/", "$item->category", "/", "$item->subcat"])."?subcat_id=$item->subcat_id", $item->subcat) }}</li> --}}
		  {{-- <li class="active">{{$pdf->title}}</li> --}}
		  <li class="active">Название</li>
		</ol>
		{{-- <h4 class="universal_heading">Деталировка {{$pdf->title}}({{$producer}})</h4> --}}
		<h4 class="universal_heading">Деталировка чего-то(какого-то производителя)</h4>
		<hr class="main_hr">
		<div class="pdf_content">
			<div class="pdf_reader">
				{{-- Insert reader here --}}
			</div>
			<div class="pdf_links">
				<p>У нас вы можете приобрести следующие запчасти и комплектующие: </p>
				<ul>{{-- 
					@foreach ($links as $link)
						<li><a href="{{link}}">{{$item->$title}}</a></li>
					@endforeach	 --}}
					<li><a href="{{link}}">Название запчасти</a></li>
				</ul>
			</div>
		</div>
	</div>	
@stop