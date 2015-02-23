

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
				<div class="catalog_category" data-category='Механическое_en'>
					<img src="img/markup/kateg_mech.jpg" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Механическое<br> оборудование</p>
				</div>

				<div class="catalog_category" data-category='Тепловое_en'>
					<img src="img/markup/kateg_tepl.jpg" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Тепловое<br> оборудование</p>
				</div>
				<div class="subcategory_block sub_1" data-category='Механическое_en'>
					<div class="subcategory_column">
						<div class="subcategory_left">
							<ul>
								@foreach ($HELP::columnize($subcats['Механическое_en'], 2, 1) as $subcat)
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
										{{ HTML::link($HELP::url_slug(['/', 'Механическое', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
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
										{{ HTML::link($HELP::url_slug(['/', 'Тепловое', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
									</li>
								@endforeach
							</ul>
						</div>	
						<div class="subcategory_right">
							<ul>	
								@foreach ($HELP::columnize($subcats['Тепловое_en'], 2, 2) as $subcat)
									<li>
										{{ HTML::link($HELP::url_slug(['/', 'Тепловое', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
									</li>
								@endforeach
							</ul>	
						</div>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
				<div class="catalog_category" data-category='Холодильное_en'>
					<img src="img/markup/kateg_holod.jpg" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Холодильное<br> оборудование</p>
				</div>
				<div class="catalog_category posud_catedory" data-category='Посудомоечное_en'>
					<img src="img/markup/kateg_posud.jpg" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Посудомоечное<br> оборудование</p>
				</div>
				<div class="subcategory_block " data-category='Холодильное_en'>
					<div class="subcategory_column">
						<div class="subcategory_left">
							<ul>
								@foreach ($HELP::columnize($subcats['Холодильное_en'], 2, 1) as $subcat)
									<li>
										{{ HTML::link($HELP::url_slug(['/', 'Холодильное', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
									</li>
								@endforeach
							</ul>
						</div>	
						<div class="subcategory_right">
							<ul>	
								@foreach ($HELP::columnize($subcats['Холодильное_en'], 2, 2) as $subcat)
									<li>
										{{ HTML::link($HELP::url_slug(['/', 'Холодильное', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
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
										{{ HTML::link($HELP::url_slug(['/', 'Посудомоечное', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
									</li>
								@endforeach
							</ul>
						</div>	
						<div class="subcategory_right">
							<ul>	
								@foreach ($HELP::columnize($subcats['Посудомоечное_en'], 2, 2) as $subcat)
									<li>
										{{ HTML::link($HELP::url_slug(['/', 'Посудомоечное', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
									</li>
								@endforeach
							</ul>	
						</div>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
			</div>
			<div class="catalog_russian">
				<h4 class="russian_heding">Российское</h4>
				<div class="catalog_category" data-category='Механическое_ru'>
					<img src="img/markup/kateg_mech.jpg" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Механическое<br> оборудование</p>
				</div>
				<div class="catalog_category" data-category='Тепловое_ru'>
					<img src="img/markup/kateg_tepl.jpg" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Тепловое<br> оборудование</p>
				</div>
				<div class="subcategory_block" data-category='Механическое_ru'>
					<div class="subcategory_column">
						<div class="subcategory_left">
							<ul>
								@foreach ($HELP::columnize($subcats['Механическое_ru'], 2, 1) as $subcat)
									<li>
										{{ HTML::link($HELP::url_slug(['/', 'Механическое', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
									</li>
								@endforeach
							</ul>
						</div>
						<div class="subcategory_right">
							<ul>	
								@foreach ($HELP::columnize($subcats['Механическое_ru'], 2, 2) as $subcat)
									<li>
										{{ HTML::link($HELP::url_slug(['/', 'Механическое', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
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
										{{ HTML::link($HELP::url_slug(['/', 'Тепловое', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
									</li>
								@endforeach
							</ul>
						</div>	
						<div class="subcategory_right">
							<ul>	
								@foreach ($HELP::columnize($subcats['Тепловое_ru'], 2, 2) as $subcat)
									<li>
										{{ HTML::link($HELP::url_slug(['/', 'Тепловое', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
									</li>
								@endforeach
							</ul>	
						</div>
					</div><!-- brands_column -->
				</div><!-- subcategory block -->
				<div class="catalog_category" data-category='Холодильное_ru'>
					<img src="img/markup/kateg_holod.jpg" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Холодильное<br> оборудование</p>
				</div>
				<div class="catalog_category posud_catedory" data-category='Посудомоечное_ru'>
					<img src="img/markup/kateg_posud.jpg" alt="" class="catalog_category_img">
					<p class="catalog_category_heading">Посудомоечное<br> оборудование</p>
				</div>
				<div class="subcategory_block second_line" data-category='Холодильное_ru'>
					<div class="subcategory_column">
						<div class="subcategory_left">
							<ul>
								@foreach ($HELP::columnize($subcats['Холодильное_ru'], 2, 1) as $subcat)
									<li>
										{{ HTML::link($HELP::url_slug(['/', 'Холодильное', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
									</li>
								@endforeach
							</ul>
						</div>	
						<div class="subcategory_right">
							<ul>	
								@foreach ($HELP::columnize($subcats['Холодильное_ru'], 2, 2) as $subcat)
									<li>
										{{ HTML::link($HELP::url_slug(['/', 'Холодильное', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
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
										{{ HTML::link($HELP::url_slug(['/', 'Посудомоечное', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
									</li>
								@endforeach
							</ul>
						</div>	
						<div class="subcategory_right">
							<ul>	
								@foreach ($HELP::columnize($subcats['Посудомоечное_ru'], 2, 2) as $subcat)
									<li>
										{{ HTML::link($HELP::url_slug(['/', 'Посудомоечное', '/', "$subcat->subcat"])."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
									</li>
								@endforeach
							</ul>	
						</div>
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
					<div class="producers_left">
						<table class="producers_list producers_left">
							@foreach ($HELP::columnize($producers, 3, 1) as $producer)
								<tr>
									<td>
										{{ HTML::link($HELP::url_slug(['/', 'producers', '/', "$producer->producer"])."?producer_id=$producer->producer_id", $producer->producer) }}
									</td>
								</tr>
							@endforeach
						</table>
					</div>
					<div class="producers_middle">
						<table class="producers_list producers_middle">
							@foreach ($HELP::columnize($producers, 3, 2) as $producer)
								<tr>
									<td>
										{{ HTML::link($HELP::url_slug(['/', 'producers', '/', "$producer->producer"])."?producer_id=$producer->producer_id", $producer->producer) }}
									</td>
								</tr>	
							@endforeach
						</table>	
					</div>
					<div class="producers_right">
						<table class="producers_list producers_right">
							@foreach ($HELP::columnize($producers, 3, 3) as $producer)
								<tr>
									<td>
										{{ HTML::link($HELP::url_slug(['/', 'producers', '/', "$producer->producer"])."?producer_id=$producer->producer_id", $producer->producer) }}
									</td>
								</tr>	
							@endforeach
						</table>
					</div>	
				</div><!-- brands_column -->
			</div><!-- brands -->
		</div> <!-- groups  -->
	</div>
@stop