@extends('partials/layout')
@extends('partials/header')
@extends('partials/footer')
@extends('partials/left_sidebar')
@extends('partials/right_sidebar')
@section('meta')
	<title>Деталлировки производителей</title>
	<meta name='keywords' content='Деталлировки производителей - Зип Общепит'>
	<meta name='description' content='Деталлировки производителей  - Зип Общепит'>
@stop

@section('body')
	<div class="main_content">
		<ol class="breadcrumb">
		  <li><a href="/">Каталог</a></li>
		  <li class="active">Все деталировки</li>
		</ol>
		<h4 class="universal_heading">Все деталировки по категориям</h4>
		<hr class="main_hr">
			<div class="catalog_categoies">
			<div class="catalog_foreing">
				<h4 class="foreign_heding">Импортное</h4>
				<div class="catalog_category" data-category='Механическое_en'>
					<img src="img/markup/kateg_mech.png" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Механическое<br> оборудование</p>
				</div>
				<div class="catalog_category" data-category='Тепловое_en'>
					<img src="img/markup/kateg_tepl.png" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Тепловое<br> оборудование</p>
				</div>
				<div class="subcategory_block sub_1" data-category='Механическое_en'>
					<div class="subcategory_column">
						<div class="subcategory_left">
							<ul>
								@foreach ($HELP::columnize($producers['Механическое_en'], 2, 1) as $subcat)
									<li>
										{{ HTML::link($HELP::url_slug(['/', 'Механическое', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
									</li>
								@endforeach
							</ul>
						</div>
						<div class="subcategory_right">
							<ul>	
								@foreach ($HELP::columnize($subcats['Механическое_en'], 2, 2) as $subcat)
									<li>
										@if ($env == 'catalog_admin')
											{{ HTML::link($HELP::url_slug(['/', 'admin', '/', 'Механическое', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
										@else
											{{ HTML::link($HELP::url_slug(['/', 'Механическое', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
										@endif
									</li>
								@endforeach
							</ul>	
						</div>	
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
				<div class="subcategory_block" data-category='Тепловое_en'>
					<div class="subcategory_column">
						<div class="subcategory_left">
							<ul>
								@foreach ($HELP::columnize($subcats['Тепловое_en'], 2, 1) as $subcat)
									<li>
										@if ($env == 'catalog_admin')
											{{ HTML::link($HELP::url_slug(['/', 'admin', '/', 'Тепловое', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
										@else
											{{ HTML::link($HELP::url_slug(['/', 'Тепловое', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
										@endif
									</li>
								@endforeach
							</ul>
						</div>	
						<div class="subcategory_right">
							<ul>	
								@foreach ($HELP::columnize($subcats['Тепловое_en'], 2, 2) as $subcat)
									<li>
										@if ($env == 'catalog_admin')
											{{ HTML::link($HELP::url_slug(['/', 'admin', '/', 'Тепловое', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
										@else
											{{ HTML::link($HELP::url_slug(['/', 'Тепловое', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
										@endif
									</li>
								@endforeach
							</ul>	
						</div>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
				<div class="catalog_category" data-category='Холодильное_en'>
					@if ($env == 'catalog_admin')
						<img src="../../img/markup/kateg_holod.png" alt="" class="catalog_category_img">
					@else
						<img src="img/markup/kateg_holod.png" alt="" class="catalog_category_img">
					@endif	
					<p class="catalog_category_heading">Холодильное<br> оборудование</p>
				</div>
				<div class="catalog_category posud_catedory" data-category='Посудомоечное_en'>
					@if ($env == 'catalog_admin')
						<img src="../../img/markup/kateg_posud.png" alt="" class="catalog_category_img">
					@else
						<img src="img/markup/kateg_posud.png" alt="" class="catalog_category_img">
					@endif
					<p class="catalog_category_heading">Посудомоечное<br> оборудование</p>
				</div>
				<div class="subcategory_block " data-category='Холодильное_en'>
					<div class="subcategory_column">
						<div class="subcategory_left">
							<ul>
								@foreach ($HELP::columnize($subcats['Холодильное_en'], 2, 1) as $subcat)
									<li>
										@if ($env == 'catalog_admin')
											{{ HTML::link($HELP::url_slug(['/', 'admin', '/', 'Холодильное', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
										@else
											{{ HTML::link($HELP::url_slug(['/', 'Холодильное', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
										@endif
									</li>
								@endforeach
							</ul>
						</div>	
						<div class="subcategory_right">
							<ul>	
								@foreach ($HELP::columnize($subcats['Холодильное_en'], 2, 2) as $subcat)
									<li>
										@if ($env == 'catalog_admin')
											{{ HTML::link($HELP::url_slug(['/', 'admin', '/', 'Холодильное', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
										@else
											{{ HTML::link($HELP::url_slug(['/', 'Холодильное', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
										@endif
									</li>
								@endforeach
							</ul>	
						</div>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
				<div class="subcategory_block " data-category='Посудомоечное_en'>
					<div class="subcategory_column">
						<div class="subcategory_left">
							<ul>
								@foreach ($HELP::columnize($subcats['Посудомоечное_en'], 2, 1) as $subcat)
									<li>
										@if ($env == 'catalog_admin')
											{{ HTML::link($HELP::url_slug(['/', 'admin', '/', 'Посудомоечное', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
										@else
											{{ HTML::link($HELP::url_slug(['/', 'Посудомоечное', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
										@endif
									</li>
								@endforeach
							</ul>
						</div>	
						<div class="subcategory_right">
							<ul>	
								@foreach ($HELP::columnize($subcats['Посудомоечное_en'], 2, 2) as $subcat)
									<li>
										@if ($env == 'catalog_admin')
											{{ HTML::link($HELP::url_slug(['/', 'admin', '/', 'Посудомоечное', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
										@else
											{{ HTML::link($HELP::url_slug(['/', 'Посудомоечное', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
										@endif
									</li>
								@endforeach
							</ul>	
						</div>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
			</div>
			<div class="catalog_russian">
				<h4 class="russian_heding">Отечественное</h4>
				<div class="catalog_category" data-category='Механическое_ru'>
					@if ($env == 'catalog_admin')
						<img src="../../img/markup/kateg_mech.png" alt="" class="catalog_category_img">
					@else
						<img src="img/markup/kateg_mech.png" alt="" class="catalog_category_img">
					@endif	
					<p class="catalog_category_heading">Механическое<br> оборудование</p>
				</div>
				<div class="catalog_category" data-category='Тепловое_ru'>
					@if ($env == 'catalog_admin')
						<img src="../../img/markup/kateg_tepl.png" alt="" class="catalog_category_img">
					@else
						<img src="img/markup/kateg_tepl.png" alt="" class="catalog_category_img">
					@endif
					<p class="catalog_category_heading">Тепловое<br> оборудование</p>
				</div>
				<div class="subcategory_block" data-category='Механическое_ru'>
					<div class="subcategory_column">
						<div class="subcategory_left">
							<ul>
								@foreach ($HELP::columnize($subcats['Механическое_ru'], 2, 1) as $subcat)
									<li>
										@if ($env == 'catalog_admin')
											{{ HTML::link($HELP::url_slug(['/', 'admin', '/', 'Механическое', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
										@else
											{{ HTML::link($HELP::url_slug(['/', 'Механическое', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
										@endif
									</li>
								@endforeach
							</ul>
						</div>
						<div class="subcategory_right">
							<ul>	
								@foreach ($HELP::columnize($subcats['Механическое_ru'], 2, 2) as $subcat)
									<li>
										@if ($env == 'catalog_admin')
											{{ HTML::link($HELP::url_slug(['/', 'admin', '/', 'Механическое', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
										@else
											{{ HTML::link($HELP::url_slug(['/', 'Механическое', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
										@endif
									</li>
								@endforeach
							</ul>	
						</div>	
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
				<div class="subcategory_block" data-category='Тепловое_ru'>
					<div class="subcategory_column">
						<div class="subcategory_left">
							<ul>
								@foreach ($HELP::columnize($subcats['Тепловое_ru'], 2, 1) as $subcat)
									<li>
										@if ($env == 'catalog_admin')
											{{ HTML::link($HELP::url_slug(['/', 'admin', '/', 'Тепловое', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
										@else
											{{ HTML::link($HELP::url_slug(['/', 'Тепловое', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
										@endif
									</li>
								@endforeach
							</ul>
						</div>	
						<div class="subcategory_right">
							<ul>	
								@foreach ($HELP::columnize($subcats['Тепловое_ru'], 2, 2) as $subcat)
									<li>
										@if ($env == 'catalog_admin')
											{{ HTML::link($HELP::url_slug(['/', 'admin', '/', 'Тепловое', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
										@else
											{{ HTML::link($HELP::url_slug(['/', 'Тепловое', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
										@endif
									</li>
								@endforeach
							</ul>	
						</div>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
				<div class="catalog_category" data-category='Холодильное_ru'>
					@if ($env == 'catalog_admin')
						<img src="../../img/markup/kateg_holod.png" alt="" class="catalog_category_img">
					@else
						<img src="img/markup/kateg_holod.png" alt="" class="catalog_category_img">
					@endif
					<p class="catalog_category_heading">Холодильное<br> оборудование</p>
				</div>
				<div class="catalog_category posud_catedory" data-category='Посудомоечное_ru'>
					@if ($env == 'catalog_admin')
						<img src="../../img/markup/kateg_posud.png" alt="" class="catalog_category_img">
					@else
						<img src="img/markup/kateg_posud.png" alt="" class="catalog_category_img">
					@endif

					<p class="catalog_category_heading">Посудомоечное<br> оборудование</p>
				</div>
				<div class="subcategory_block second_line" data-category='Холодильное_ru'>
					<div class="subcategory_column">
						<div class="subcategory_left">
							<ul>
								@foreach ($HELP::columnize($subcats['Холодильное_ru'], 2, 1) as $subcat)
									<li>
										@if ($env == 'catalog_admin')
											{{ HTML::link($HELP::url_slug(['/', 'admin', '/', 'Холодильное', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
										@else
											{{ HTML::link($HELP::url_slug(['/', 'Холодильное', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
										@endif
									</li>
								@endforeach
							</ul>
						</div>	
						<div class="subcategory_right">
							<ul>	
								@foreach ($HELP::columnize($subcats['Холодильное_ru'], 2, 2) as $subcat)
									<li>
										@if ($env == 'catalog_admin')
											{{ HTML::link($HELP::url_slug(['/', 'admin', '/', 'Холодильное', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
										@else
											{{ HTML::link($HELP::url_slug(['/', 'Холодильное', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
										@endif
									</li>
								@endforeach
							</ul>	
						</div>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
				<div class="subcategory_block second_line" data-category='Посудомоечное_ru'>
					<div class="subcategory_column">
						<div class="subcategory_left">
							<ul>
								@foreach ($HELP::columnize($subcats['Посудомоечное_ru'], 2, 1) as $subcat)
									<li>
										@if ($env == 'catalog_admin')
											{{ HTML::link($HELP::url_slug(['/', 'admin', '/', 'Посудомоечное', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
										@else
											{{ HTML::link($HELP::url_slug(['/', 'Посудомоечное', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
										@endif
									</li>
								@endforeach
							</ul>
						</div>	
						<div class="subcategory_right">
							<ul>	
								@foreach ($HELP::columnize($subcats['Посудомоечное_ru'], 2, 2) as $subcat)
									<li>
										@if ($env == 'catalog_admin')
											{{ HTML::link($HELP::url_slug(['/', 'admin', '/', 'Посудомоечное', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
										@else
											{{ HTML::link($HELP::url_slug(['/', 'Посудомоечное', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
										@endif
									</li>
								@endforeach
							</ul>	
						</div>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
			</div><!--catalog_russian-->	
		</div>
		{{-- <div class="pdf_all_list">
			<ul> 
				@foreach ($pdf_producers as $producer)
					<li>
						{{ HTML::link($HELP::url_slug(['/', 'all_pdf', '/', "$producer->producer"])."?producer_id=$producer->producer_id", $producer->producer) }}
					</li>	
				@endforeach 
			</ul>
		</div> --}}
	</div>	
@stop