@extends('layout')
@extends('header')
@extends('footer')
@extends('left_sidebar')
@extends('right_sidebar')
 
@section('body')
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
				<div class="subcategory_block first_line" data-category='Механическое'>
					<div class="subcategory_column">
						<ul>
							@foreach ($subcats['foreign']['Механическое'] as $subcat)
								<li>
									{{ HTML::link(App::make("HelperController")->url_slug("/Механическое/$subcat->subcat")."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
								</li>
							@endforeach
						</ul>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
				<div class="catalog_category" data-category='Тепловое'>
					<img src="" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Тепловое оборудование</p>
				</div>
				<div class="subcategory_block first_line" data-category='Тепловое'>
					<div class="subcategory_column">
						<ul>
							@foreach ($subcats['foreign']['Тепловое'] as $subcat)
								<li>
									{{ HTML::link(App::make("HelperController")->url_slug("/Тепловое/$subcat->subcat")."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
								</li>
							@endforeach
						</ul>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
				<div class="catalog_category" data-category='Холодильное'>
					<img src="" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Холодильное оборудование</p>
				</div>
				<div class="subcategory_block second_line" data-category='Холодильное'>
					<div class="subcategory_column">
						<ul>
							@foreach ($subcats['foreign']['Холодильное'] as $subcat)
								<li>
									{{ HTML::link(App::make("HelperController")->url_slug("/Холодильное/$subcat->subcat")."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
								</li>
							@endforeach
						</ul>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
				<div class="catalog_category" data-category='Посудомоечное'>
					<img src="" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Посудомоечное оборудование</p>
				</div>
				<div class="subcategory_block second_line" data-category='Посудомоечное'>
					<div class="subcategory_column">
						<ul>
							@foreach ($subcats['foreign']['Посудомоечное'] as $subcat)
								<li>
									{{ HTML::link(App::make("HelperController")->url_slug("/Посудомоечное/$subcat->subcat")."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
								</li>
							@endforeach
						</ul>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
			</div>
			<div class="catalog_russian" data-category-ru='Механическое'>
				<div class="catalog_category">
					<img src="" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Механическое оборудование</p>
				</div>
				<div class="subcategory_block first_line" data-category-ru='Механическое'>
					<div class="subcategory_column">
						<ul>
							@foreach ($subcats['domestic']['Механическое'] as $subcat)
								<li>
									{{ HTML::link(App::make("HelperController")->url_slug("/Механическое/$subcat->subcat")."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
								</li>
							@endforeach
						</ul>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
				<div class="catalog_category" data-category-ru='Тепловое'>
					<img src="" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Тепловое оборудование</p>
				</div>
				<div class="subcategory_block first_line" data-category-ru='Тепловое'>
					<div class="subcategory_column">
						<ul>
							@foreach ($subcats['domestic']['Тепловое'] as $subcat)
								<li>
									{{ HTML::link(App::make("HelperController")->url_slug("/Тепловое/$subcat->subcat")."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
								</li>
							@endforeach
						</ul>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
				<div class="catalog_category" data-category-ru='Холодильное'>
					<img src="" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Холодильное оборудование</p>
				</div>
				<div class="subcategory_block second_line" data-category-ru='Холодильное'>
					<div class="subcategory_column">
						<ul>
							@foreach ($subcats['domestic']['Холодильное'] as $subcat)
								<li>
									{{ HTML::link(App::make("HelperController")->url_slug("/Холодильное/$subcat->subcat")."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
								</li>
							@endforeach
						</ul>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
				<div class="catalog_category" data-category-ru='Посудомоечное'>
					<img src="" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Посудомоечное оборудование</p>
				</div>
				<div class="subcategory_block second_line" data-category-ru='Посудомоечное'>
					<div class="subcategory_column">
						<ul>
							@foreach ($subcats['domestic']['Посудомоечное'] as $subcat)
								<li>
									{{ HTML::link(App::make("HelperController")->url_slug("/Посудомоечное/$subcat->subcat")."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
								</li>
							@endforeach
						</ul>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
			</div><!--catalog_russian-->	
		</div>
		<div class="catalog_producers">
			<p class="catalog_subheading">По производителю</p>
			<hr>
			<div class = "groups">
				<div class="brands_column">
					<ul>
						<!--[if lt IE 10]>
							<script src="{{ asset('js/modernizr_columns.js') }}"></script>
						<![endif]-->
						@foreach ($producers as $producer)
							<li>
							{{ HTML::link(App::make("HelperController")->url_slug("/producers/$producer->producer")."?producer_id=$producer->producer_id", $producer->producer) }}
							</li>
						@endforeach
					</ul>
				</div><!-- brands_column -->
			</div><!-- brands -->
		</div> <!-- groups  -->
	</div>
	
	<?php $q = http_build_query(Input::except(['item', 'order'])); ?>
	<select name="items_sort" id="items_sort">
		<option data-link="{{URL::current().'?'.$q.'&sort=item&order=desc'}}">
			по имени(а-я)
		</option>
		<option data-link="{{URL::current().'?'.$q.'&sort=item&order=desc'}}">
			по имени(z-a)
		</option>
	</select>
@stop