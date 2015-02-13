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
							@foreach ($subcats['Механическое_en'] as $subcat)
								<li>
									{{ HTML::link($HELP::url_slug(['/', 'Механическое', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
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
							@foreach ($subcats['Тепловое_en'] as $subcat)
								<li>
									{{ HTML::link($HELP::url_slug(['/', 'Тепловое', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
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
							@foreach ($subcats['Холодильное_en'] as $subcat)
								<li>
									{{ HTML::link($HELP::url_slug(['/', 'Холодильное', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
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
							@foreach ($subcats['Посудомоечное_en'] as $subcat)
								<li>
									{{ HTML::link($HELP::url_slug(['/', 'Посудомоечное', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
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
							@foreach ($subcats['Механическое_ru'] as $subcat)
								<li>
									{{ HTML::link($HELP::url_slug(['/', 'Механическое', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
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
							@foreach ($subcats['Тепловое_ru'] as $subcat)
								<li>
									{{ HTML::link($HELP::url_slug(['/', 'Тепловое', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
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
							@foreach ($subcats['Холодильное_ru'] as $subcat)
								<li>
									{{ HTML::link($HELP::url_slug(['/', 'Холодильное', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
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
							@foreach ($subcats['Посудомоечное_ru'] as $subcat)
								<li>
									{{ HTML::link($HELP::url_slug(['/', 'Посудомоечное', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
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
						@foreach ($producers as $producer)
							<li>
							{{ HTML::link($HELP::url_slug(['/', 'producers', '/', "$producer->producer"])."?producer_id=$producer->producer_id", $producer->producer) }}
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