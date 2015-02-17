@extends('layout')
@extends('header')
@extends('footer')
@extends('left_sidebar')
@extends('right_sidebar')

@section('body')
	<div class="main_content">
		<h2 class="one_category_heading">{{ $HELP::getNormal($HELP::$translit[Request::segment(2)]) }} оборудование</h2>
		<hr class="main_hr">
		@foreach ($subcats as $subcat)
			<ul class="subcats">
				<li class="subcat">
					{{ HTML::link($HELP::url_slug(["/", "$subcat->category", "/", "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
				</li>
			</ul>
		@endforeach
	</div>
@stop