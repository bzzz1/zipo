@extends('layout')
@extends('header')
@extends('footer')
@extends('left_sidebar')
@extends('right_sidebar')

@section('body')
	<div class="main_content">
		<h2 class="one_category_heading">{{$current->category}}</h2>
		<hr class="main_hr">
		@foreach ($subcats["$current->category"] as $subcat)
			<ul class="subcats">
				<li class="subcat">
					{{ HTML::link($HELP::url_slug(["/", "$current->category", "/", "$subcat->subcat"])."?subcat_id=$current->subcat_id", $current->subcat) }}
				</li>
			</ul>
		@endforeach
	</div>
@stop