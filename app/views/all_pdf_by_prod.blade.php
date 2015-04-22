@extends('partials/layout')
@extends('partials/header')
@extends('partials/footer')
@extends('partials/left_sidebar')
@extends('partials/right_sidebar')
@section('body')
	<div class="main_content">
		<ol class="breadcrumb">
		  <li><a href="/">Каталог</a></li>
		  <li>{{HTML::link($HELP::url_slug(["/pdf"]), "Все деталировки" }}</li>
		  <li class="active">Деталировки {{$producer->producer}}</li>
		</ol>
		<h4 class="universal_heading">Деталировки производителя</h4>
		<hr class="main_hr">
		<div class="pdf_list">
			<ul> 
				@foreach ($pdfs as $pdf)
					<li>
						{{ HTML::link($HELP::url_slug(['/', 'pdf', '/', "$pdf->file"])."?pdf_id=$pdf->pdf_id"."&producer_id=$pdf->producer_id", $pdf->pdf_file)}}
					</li>	
				@endforeach 
			</ul>
		</div>
	</div>	
@stop