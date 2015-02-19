@extends('layout')
@extends('header')
@extends('footer')
@extends('left_sidebar')
@extends('right_sidebar')
 
@section('body')
	@if (Session::get('message'))
		<p style='color: rgb(0,255,0)'>{{ Session::get('message') }}</p>
	@endif

	<div class="main_content">
		<div class="headings">
			<p class="catalog_heding universal_heading">Каталог продукции</p>
			<p class="catalog_subheading">По виду продукции</p>
			<hr class="catalog_hr">
		</div>
		<div class="catalog_categoies">
			<div class="catalog_foreing">
				<h4 class="foreign_heding">Импортное</h4>
				<div class="catalog_category" data-category='Механическое'>
					<img src="img/markup/kateg_mech.jpg" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Механическое<br> оборудование</p>
					<div class="subcategory_block" data-category='Механическое'>
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
				</div>

				<div class="catalog_category" data-category='Тепловое'>
					<img src="img/markup/kateg_tepl.jpg" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Тепловое<br> оборудование</p>
					<div class="subcategory_block" data-category='Тепловое'>
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
				</div>
				<div class="catalog_category" data-category='Холодильное'>
					<img src="img/markup/kateg_holod.jpg" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Холодильное<br> оборудование</p>
					<div class="subcategory_block " data-category='Холодильное'>
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
				</div>
				<div class="catalog_category" data-category='Посудомоечное'>
					<img src="img/markup/kateg_posud.jpg" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Посудомоечное<br> оборудование</p>
					<div class="subcategory_block " data-category='Посудомоечное'>
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
			</div>
			<div class="catalog_russian">
				<h4 class="russian_heding">Российское</h4>
				<div class="catalog_category" data-category-ru='Механическое'>
					<img src="img/markup/kateg_mech.jpg" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Механическое<br> оборудование</p>
					<div class="subcategory_block" data-category-ru='Механическое'>
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
				</div>
				<div class="catalog_category" data-category-ru='Тепловое'>
					<img src="img/markup/kateg_tepl.jpg" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Тепловое<br> оборудование</p>
					<div class="subcategory_block" data-category-ru='Тепловое'>
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
				</div>
				<div class="catalog_category" data-category-ru='Холодильное'>
					<img src="img/markup/kateg_holod.jpg" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Холодильное<br> оборудование</p>
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
				</div>
				<div class="catalog_category" data-category-ru='Посудомоечное'>
					<img src="img/markup/kateg_posud.jpg" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Посудомоечное<br> оборудование</p>
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
				</div>
			</div><!--catalog_russian-->	
		</div>
		<div class="catalog_producers">
			<div class="producers_block_heding">
				<p class="catalog_subheading subheading_brands">По производителю</p>
				<hr class="catalog_hr">
			</div>	
			<div class = "groups">
				<div class="brands_column">
					<ul class="producers_list">
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
@stop