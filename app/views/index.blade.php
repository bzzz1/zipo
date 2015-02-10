@extends('layout')
@extends('header')
@extends('footer')
@extends('left_sidebar')
@extends('right_sidebar')
 
@section('body')
	<!-- EXAMPLE !!!!!!! -->
	<span style='color:blue'>Импортное</span><hr>
	<span style='color:red'>Механическое</span><hr>
	@if (isset($subcats['foreign']['Механическое']))
		@foreach ($subcats['foreign']['Механическое'] as $subs) 
			<p class='subcat'>{{ $subs['subcat'] }}</p>
			<br>
			<p class='category'>{{ $subs['category'] }}</p>
			<br>
		@endforeach
	@endif
	<span style='color:red'>Тепловое</span><hr>
	@if (isset($subcats['foreign']['Тепловое']))
		@foreach ($subcats['foreign']['Тепловое'] as $subs) 
			<p class='subcat'>{{ $subs['subcat'] }}</p>
			<br>
			<p class='category'>{{ $subs['category'] }}</p>
			<br>
		@endforeach
	@endif
	<span style='color:red'>Холодильное</span><hr>
	@if (isset($subcats['foreign']['Холодильное']))
		@foreach ($subcats['foreign']['Холодильное'] as $subs) 
			<p class='subcat'>{{ $subs['subcat'] }}</p>
			<br>
			<p class='category'>{{ $subs['category'] }}</p>
			<br>
		@endforeach
	@endif
	<span style='color:red'>Посудомоечное</span><hr>
	@if (isset($subcats['foreign']['Посудомоечное']))
		@foreach ($subcats['foreign']['Посудомоечное'] as $subs) 
			<p class='subcat'>{{ $subs['subcat'] }}</p>
			<br>
			<p class='category'>{{ $subs['category'] }}</p>
			<br>
		@endforeach
	@endif


	<span style='color:blue'>Отечественное</span><hr>
	<span style='color:red'>Механическое</span><hr>
	@if (isset($subcats['foreign']['Механическое']))
		@foreach ($subcats['foreign']['Механическое'] as $subs) 
			<p class='subcat'>{{ $subs['subcat'] }}</p>
			<br>
			<p class='category'>{{ $subs['category'] }}</p>
			<br>
		@endforeach
	@endif
	<span style='color:red'>Тепловое</span><hr>
	@if (isset($subcats['foreign']['Тепловое']))
		@foreach ($subcats['foreign']['Тепловое'] as $subs) 
			<p class='subcat'>{{ $subs['subcat'] }}</p>
			<br>
			<p class='category'>{{ $subs['category'] }}</p>
			<br>
		@endforeach
	@endif
	<span style='color:red'>Холодильное</span><hr>
	@if (isset($subcats['foreign']['Холодильное']))
		@foreach ($subcats['foreign']['Холодильное'] as $subs) 
			<p class='subcat'>{{ $subs['subcat'] }}</p>
			<br>
			<p class='category'>{{ $subs['category'] }}</p>
			<br>
		@endforeach
	@endif
	<span style='color:red'>Посудомоечное</span><hr>
	@if (isset($subcats['foreign']['Посудомоечное']))
		@foreach ($subcats['foreign']['Посудомоечное'] as $subs) 
			<p class='subcat'>{{ $subs['subcat'] }}</p>
			<br>
			<p class='category'>{{ $subs['category'] }}</p>
			<br>
		@endforeach
	@endif
<!-- EXAMPLE !!!!!!! -->

	<div class="main_content">
		<div class="headings">
			<p class="catalog_heding">Каталог продукции</p>
			<p class="catalog_subheading">По виду продукции</p>
			<hr>
		</div>
		<div class="catalog_categoies">
			<div class="catalog_foreing">
				<div class="catalog_category" data-category='Механическое'>
					<img src="" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Механическое оборудование</p>
				</div>
				<div class="catalog_category" data-category='Тепловое'>
					<img src="" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Тепловое оборудование</p>
				</div>
				<div class="catalog_category" data-category='Холодильное'>
					<img src="" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Холодильное оборудование</p>
				</div>
				<div class="catalog_category" data-category='Посудомоечное'>
					<img src="" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Посудомоечное оборудование</p>
				</div>
				<div class="subcategory_block first_line" data-category='Механическое'>
					<div class="subcategory_column">
						<ul>
							@foreach ($subcats['foreign']['Механическое'] as $subcat)
								<li>
									{{ HTML::link("/Механическое/$subcat?subcat_id=$subcat->subcat_id", $subcat) }}
								</li>
							@endforeach
						</ul>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
				<div class="subcategory_block first_line" data-category='Тепловое'>
					<div class="subcategory_column">
						<ul>
							@foreach ($subcats['foreign']['Тепловое'] as $subcat)
								<li>
									{{ HTML::link("/Тепловое/$subcat?subcat_id=$subcat->subcat_id", $subcat) }}
								</li>
							@endforeach
						</ul>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
				<div class="subcategory_block second_line" data-category='Холодильное'>
					<div class="subcategory_column">
						<ul>
							@foreach ($subcats['foreign']['Холодильное'] as $subcat)
								<li>
									{{ HTML::link("/Холодильное/$subcat?subcat_id=$subcat->subcat_id", $subcat) }}
								</li>
							@endforeach
						</ul>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
				<div class="subcategory_block second_line" data-category='Посудомоечное'>
					<div class="subcategory_column">
						<ul>
							@foreach ($subcats['foreign']['Посудомоечное'] as $subcat)
								<li>
									{{ HTML::link("/Посудомоечное/$subcat?subcat_id=$subcat->subcat_id", $subcat) }}
								</li>
							@endforeach
						</ul>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
			</div>
			<div class="catalog_russian" data-category='Механическое'>
				<div class="catalog_category">
					<img src="" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Механическое оборудование</p>
				</div>
				<div class="catalog_category" data-category='Тепловое'>
					<img src="" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Тепловое оборудование</p>
				</div>
				<div class="catalog_category" data-category='Холодильное'>
					<img src="" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Холодильное оборудование</p>
				</div>
				<div class="catalog_category" data-category='Посудомоечное'>
					<img src="" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Посудомоечное оборудование</p>
				</div>
				<div class="subcategory_block first_line" data-category='Механическое'>
					<div class="subcategory_column">
						<ul>
							@foreach ($subcats['domestic']['Механическое'] as $subcat)
								<li>
									{{ HTML::link("/Механическое/$subcat?subcat_id=$subcat->subcat_id", $subcat) }}
								</li>
							@endforeach
						</ul>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
				<div class="subcategory_block first_line" data-category='Тепловое'>
					<div class="subcategory_column">
						<ul>
							@foreach ($subcats['domestic']['Тепловое'] as $subcat)
								<li>
									{{ HTML::link("/Тепловое/$subcat?subcat_id=$subcat->subcat_id", $subcat) }}
								</li>
							@endforeach
						</ul>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
				<div class="subcategory_block second_line" data-category='Холодильное'>
					<div class="subcategory_column">
						<ul>
							@foreach ($subcats['domestic']['Холодильное'] as $subcat)
								<li>
									{{ HTML::link("/Холодильное/$subcat?subcat_id=$subcat->subcat_id", $subcat) }}
								</li>
							@endforeach
						</ul>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
				<div class="subcategory_block second_line" data-category='Посудомоечное'>
					<div class="subcategory_column">
						<ul>
							@foreach ($subcats['domestic']['Посудомоечное'] as $subcat)
								<li>
									{{ HTML::link("/Посудомоечное/$subcat?subcat_id=$subcat->subcat_id", $subcat) }}
								</li>
							@endforeach
						</ul>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->

			</div>	
		</div>
		<div class="catalog_producers">
			<p class="catalog_subheading">По виду продукции</p>
			<hr>
			<div class = "groups">
				<div class="brands">
					<div class="mask_title_sort">
						<p class="brands_sort title_sort">По производитею</p>
					</div>
					<div class="brands_column">
						<ul>
							<!--[if lt IE 10]>
								<script src="{{ asset('js/modernizr_columns.js') }}"></script>
							<![endif]-->
							@foreach ($producers as $producer)
								<li>
									{{ HTML::link("/producers/$producer->title?producer_id=$producer->producer_id", $producer->title) }}
								</li>
							@endforeach
						</ul>
					</div><!-- brands_column -->
				</div><!-- brands -->
			</div> <!-- groups  -->
		</div>		
	</div>
@stop