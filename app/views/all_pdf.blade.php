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
		  <li class="active">Все деталировки</li>
		</ol>
		<h4 class="universal_heading">Все деталировки</h4>
		<hr class="main_hr">
		{{-- <div class="pdf_all_list">
			@foreach ($producers as $producer)
				<p class="one_prod_pdf" data-category = "{{$producer->producer}}">{{$producer->producer}}</p>
				<div class="one_prod_pdf_sub" data-category = "{{producer->producer}}">
					<ul class="titles">
						@foreach ($pdfs as $pdf)
							<li class="pdf_title_li"><a href="pdf/{{$pdf-?>title}}">{{$pdf->title}}</a></li>
						@endforeach	
					</ul>
				</div>
			@endforeach	
		</div> --}}
		<div class="pdf_all_list">
			<ul> {{-- 
				@foreach ($pdf_producers as $producer)
					<li>
						{{ HTML::link($HELP::url_slug(['/', 'pdf', '/', "$producer->producer"])."?producer_id=$producer->producer_id", $producer->producer) }}
					</li>	
				@endforeach  --}}
				<li>
					{{ HTML::link($HELP::url_slug(['/', 'pdf', '/', "$producer->producer"])."?producer_id=$producer->producer_id", Название производителя)}}
				</li>	
			</ul>
		</div>
	</div>	
@stop