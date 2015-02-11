@extends('layout')
@extends('header')
@extends('footer')
@extends('left_sidebar')
@extends('right_sidebar')

@section('body')
	<div class="main_content">
		<h2 class="one_category_heading">{{$cur_subcat->category}}</h2>
		<hr class="main_hr">
		@foreach ($subcats["$cur_subcat->category"] as $subcat)
			<ul class="subcats">
				<li class="subcat">{{$subcat->subcat}}</li>
			</ul>
		@endforeach
	</div>
@stop