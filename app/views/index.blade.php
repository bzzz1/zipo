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
							<li>
								{{ HTML::link("$env/Барное/Всё", 'Показать всё') }}
							</li>
							@foreach ($subcategories['Механическое'] as $subcategory)
								<li>
									{{ HTML::link("$env/Барное/$subcategory", $subcategory) }}
								</li>
							@endforeach
						</ul>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
				<div class="subcategory_block first_line" data-category='Тепловое'>
					<div class="subcategory_column">
						<ul>
							<li>
								{{ HTML::link("$env/Барное/Всё", 'Показать всё') }}
							</li>
							@foreach ($subcategories['Тепловое'] as $subcategory)
								<li>
									{{ HTML::link("$env/Барное/$subcategory", $subcategory) }}
								</li>
							@endforeach
						</ul>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
				<div class="subcategory_block second_line" data-category='Холодильное'>
					<div class="subcategory_column">
						<ul>
							<li>
								{{ HTML::link("$env/Барное/Всё", 'Показать всё') }}
							</li>
							@foreach ($subcategories['Холодильное'] as $subcategory)
								<li>
									{{ HTML::link("$env/Барное/$subcategory", $subcategory) }}
								</li>
							@endforeach
						</ul>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
				<div class="subcategory_block second_line" data-category='Посудомоечное'>
					<div class="subcategory_column">
						<ul>
							<li>
								{{ HTML::link("$env/Барное/Всё", 'Показать всё') }}
							</li>
							@foreach ($subcategories['Посудомоечное'] as $subcategory)
								<li>
									{{ HTML::link("$env/Барное/$subcategory", $subcategory) }}
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
							<li>
								{{ HTML::link("$env/Барное/Всё", 'Показать всё') }}
							</li>
							@foreach ($subcategories['Механическое'] as $subcategory)
								<li>
									{{ HTML::link("$env/Барное/$subcategory", $subcategory) }}
								</li>
							@endforeach
						</ul>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
				<div class="subcategory_block first_line" data-category='Тепловое'>
					<div class="subcategory_column">
						<ul>
							<li>
								{{ HTML::link("$env/Барное/Всё", 'Показать всё') }}
							</li>
							@foreach ($subcategories['Тепловое'] as $subcategory)
								<li>
									{{ HTML::link("$env/Барное/$subcategory", $subcategory) }}
								</li>
							@endforeach
						</ul>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
				<div class="subcategory_block second_line" data-category='Холодильное'>
					<div class="subcategory_column">
						<ul>
							<li>
								{{ HTML::link("$env/Барное/Всё", 'Показать всё') }}
							</li>
							@foreach ($subcategories['Холодильное'] as $subcategory)
								<li>
									{{ HTML::link("$env/Барное/$subcategory", $subcategory) }}
								</li>
							@endforeach
						</ul>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
				<div class="subcategory_block second_line" data-category='Посудомоечное'>
					<div class="subcategory_column">
						<ul>
							<li>
								{{ HTML::link("$env/Барное/Всё", 'Показать всё') }}
							</li>
							@foreach ($subcategories['Посудомоечное'] as $subcategory)
								<li>
									{{ HTML::link("$env/Барное/$subcategory", $subcategory) }}
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
									{{ HTML::link("$env/$producer", $producer) }}
								</li>
							@endforeach
						</ul>
					</div><!-- brands_column -->
				</div><!-- brands -->
			</div> <!-- groups  -->
		</div>		
	</div>
@stop