@extends('partials/layout')
@extends('partials/header')
@extends('partials/footer')
@extends('partials/left_sidebar')
@extends('partials/right_sidebar')
@section('body')
	<div class="main_content">
		<ol class="breadcrumb">
		  <li><a href="/">Каталог</a></li>
		  <li class="active">Все деталировки</li>
		</ol>
		<h4 class="universal_heading">Все деталировки</h4>
		<hr class="main_hr">
		<div class="pdf_all_list">
			<ul> 
				@foreach ($pdf_producers as $producer)
					<li>
						{{ HTML::link($HELP::url_slug(['/', 'all_pdf', '/', "$producer->producer"])."?producer_id=$producer->producer_id", $producer->producer) }}
					</li>	
				@endforeach 
			</ul>
		</div>
	</div>	
@stop