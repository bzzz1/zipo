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
					<a href="{{URL::to($HELP::url_slug(['/','category', '/', 'Механическое_en']))}}" class="catalog_category_heading">Механическое<br> оборудование</a>
					<!-- <p class="catalog_category_heading">Механическое<br> оборудование</p> -->
				</div>

				<div class="catalog_category" data-category='Тепловое'>
					<img src="img/markup/kateg_tepl.jpg" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Тепловое<br> оборудование</p>
				</div>
				<div class="subcategory_block sub_1" data-category='Механическое'>
					<div class="subcategory_column">
						<div class="subcategory_left">
							<ul>
								@foreach ($subcats['Механическое_en'] as $subcat)
									<li>
										{{ HTML::link($HELP::url_slug(['/', 'Механическое', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
									</li>
								@endforeach
							</ul>
						</div>
						<div class="subcategory_right">
							<ul>	
							</ul>	
						</div>	
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
				<div class="subcategory_block" data-category='Тепловое'>
					<div class="subcategory_column">
						<div class="subcategory_left">
							<ul>
								@foreach ($subcats['Тепловое_en'] as $subcat)
									<li>
										{{ HTML::link($HELP::url_slug(['/', 'Тепловое', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
									</li>
								@endforeach
							</ul>
						</div>	
						<div class="subcategory_right"></div>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
				<div class="catalog_category" data-category='Холодильное'>
					<img src="img/markup/kateg_holod.jpg" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Холодильное<br> оборудование</p>
				</div>
				<div class="catalog_category posud_catedory" data-category='Посудомоечное'>
					<img src="img/markup/kateg_posud.jpg" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Посудомоечное<br> оборудование</p>
				</div>
				<div class="subcategory_block " data-category='Холодильное'>
					<div class="subcategory_column">
						<div class="subcategory_left">
							<ul>
								@foreach ($subcats['Холодильное_en'] as $subcat)
									<li>
										{{ HTML::link($HELP::url_slug(['/', 'Холодильное', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
									</li>
								@endforeach
							</ul>
						</div>	
						<div class="subcategory_right"></div>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
				<div class="subcategory_block " data-category='Посудомоечное'>
					<div class="subcategory_column">
						<div class="subcategory_left">
							<ul>
								@foreach ($subcats['Посудомоечное_en'] as $subcat)
									<li>
										{{ HTML::link($HELP::url_slug(['/', 'Посудомоечное', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
									</li>
								@endforeach
							</ul>
						</div>	
						<div class="subcategory_right"></div>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
			</div>
			<div class="catalog_russian">
				<h4 class="russian_heding">Российское</h4>
				<div class="catalog_category" data-category-ru='Механическое'>
					<img src="img/markup/kateg_mech.jpg" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Механическое<br> оборудование</p>
				</div>
				<div class="catalog_category" data-category-ru='Тепловое'>
					<img src="img/markup/kateg_tepl.jpg" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Тепловое<br> оборудование</p>
				</div>
				<div class="subcategory_block" data-category-ru='Механическое'>
					<div class="subcategory_column">
						<div class="subcategory_left">
							<ul>
								@foreach ($subcats['Механическое_ru'] as $subcat)
									<li>
										{{ HTML::link($HELP::url_slug(['/', 'Механическое', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
									</li>
								@endforeach
							</ul>
						</div>	
						<div class="subcategory_right"></div>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
				<div class="subcategory_block" data-category-ru='Тепловое'>
					<div class="subcategory_column">
						<div class="subcategory_left">
							<ul>
								@foreach ($subcats['Тепловое_ru'] as $subcat)
									<li>
										{{ HTML::link($HELP::url_slug(['/', 'Тепловое', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
									</li>
								@endforeach
							</ul>
						</div>	
						<div class="subcategory_right"></div>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
				<div class="catalog_category" data-category-ru='Холодильное'>
					<img src="img/markup/kateg_holod.jpg" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Холодильное<br> оборудование</p>
				</div>
				<div class="catalog_category posud_catedory" data-category-ru='Посудомоечное'>
					<img src="img/markup/kateg_posud.jpg" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Посудомоечное<br> оборудование</p>
				</div>
				<div class="subcategory_block second_line" data-category-ru='Холодильное'>
					<div class="subcategory_column">
						<div class="subcategory_left">
							<ul>
								@foreach ($subcats['Холодильное_ru'] as $subcat)
									<li>
										{{ HTML::link($HELP::url_slug(['/', 'Холодильное', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
									</li>
								@endforeach
							</ul>
						</div>	
						<div class="subcategory_right"></div>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
				<div class="subcategory_block second_line" data-category-ru='Посудомоечное'>
					<div class="subcategory_column">
						<div class="subcategory_left">
							<ul>
								@foreach ($subcats['Посудомоечное_ru'] as $subcat)
									<li>
										{{ HTML::link($HELP::url_slug(['/', 'Посудомоечное', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
									</li>
								@endforeach
							</ul>
						</div>	
						<div class="subcategory_right"></div>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
			</div><!--catalog_russian-->	
		</div>
		<div class="catalog_producers">
			<div class="producers_block_heding">
				<p class="catalog_subheading subheading_brands">По производителю</p>
				<hr class="catalog_hr">
			</div>	
			<div class = "groups">
				<div class="brands_column">
					<?php 
						$producers = $producers->all();
						$count = count($producers);
						$rest = $count % 3;
						$end = ($count - $rest)/3;

						switch ($rest) {
						    case 0:
								$first = $end;
								$second = $end;
								break;
						    case 1:
								$first = $end + 1;
								$second = $end;
								break;
						    case 2:
								$first = $end + 1;
								$second = $end + 1;
								break;
						}
					?>
					<div class="producers_left">
						<ul class="producers_list">
							@foreach (array_slice($producers, 0, $first) as $producer)
								<li>
									{{ HTML::link($HELP::url_slug(['/', 'producers', '/', "$producer->producer"])."?producer_id=$producer->producer_id", $producer->producer) }}
								</li>
							@endforeach
						</ul>
					</div>
					<div class="producers_middle">
						<ul class="producers_list">
							@foreach (array_slice($producers, $first, $second) as $producer)
								<li>
									{{ HTML::link($HELP::url_slug(['/', 'producers', '/', "$producer->producer"])."?producer_id=$producer->producer_id", $producer->producer) }}
								</li>
							@endforeach
						</ul>	
					</div>
					<div class="producers_right">
						<ul class="producers_list">
							@foreach (array_slice($producers, $first+$second, $end) as $producer)
								<li>
									{{ HTML::link($HELP::url_slug(['/', 'producers', '/', "$producer->producer"])."?producer_id=$producer->producer_id", $producer->producer) }}
								</li>
							@endforeach
						</ul>
					</div>	
				</div><!-- brands_column -->
			</div><!-- brands -->
		</div> <!-- groups  -->
	</div>
@stop