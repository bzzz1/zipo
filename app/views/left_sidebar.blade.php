@section('left_sidebar')	
	<div class="left_sidebar">
		<div class="container_sidebar">
			{{ Form::open(array('url' => "/search", 'method' => 'GET', 'class'=>'form-inline left_sidebar_search')) }}
				{{ Form::text('query', null, ['placeholder'=>"Поиск по каталогу", 'class'=>'form-control', 'id' =>'search']) }} 
			{{ Form::close() }}
			<div class="left_sidebar_catalog">
				<h3 class="left_sidebar_catalog">Каталог</h3>
				<h4 class="left_sidebar_heading">Импортное</h4>
				<div class="left_sidebar_catalog_categories">
					<button class="category">Механическое оборудование</button>
					<div class="left_sidebar_catalog_subcategories">
						<div class="subcategory_block first_line" data-category='Механическое'>
							<ul>
								@foreach ($subcats['foreign']['Механическое'] as $subcat)
									<li>
										{{ HTML::link("/Механическое/$subcat->subcat?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
									</li>
								@endforeach
							</ul>
						</div><!-- subcategory block -->
					</div>
					<button class="category">Тепловое оборудование</button>
					<div class="left_sidebar_catalog_subcategories">
						<div class="subcategory_block first_line" data-category='Тепловое'>
							<ul>
								@foreach ($subcats['foreign']['Тепловое'] as $subcat)
									<li>
										{{ HTML::link("/Тепловое/$subcat->subcat?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
									</li>
								@endforeach
							</ul>
						</div><!-- subcategory block -->
					</div>
					<button class="category">Холодильное оборудование</button>
					<div class="left_sidebar_catalog_subcategories">
						<div class="subcategory_block first_line" data-category='Холодильное'>
							<ul>
								@foreach ($subcats['foreign']['Холодильное'] as $subcat)
									<li>
										{{ HTML::link("/Холодильное/$subcat->subcat?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
									</li>
								@endforeach
							</ul>
						</div><!-- subcategory block -->
					</div>
					<button class="category">Посудомоечное оборудование</button>
					<div class="left_sidebar_catalog_subcategories">
						<div class="subcategory_block first_line" data-category='Посудомоечное'>
							<ul>
								@foreach ($subcats['foreign']['Механическое'] as $subcat)
									<li>
										{{ HTML::link("/Посудомоечное/$subcat->subcat?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
									</li>
								@endforeach
							</ul>
						</div><!-- subcategory block -->
					</div>
					<button class="category">Механическое оборудование</button>
					<div class="left_sidebar_catalog_subcategories">
						<div class="subcategory_block first_line" data-category='Механическое'>
							<ul>
								@foreach ($subcats['domestic']['Механическое'] as $subcat)
									<li>
										{{ HTML::link("/Механическое/$subcat->subcat?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
									</li>
								@endforeach
							</ul>
						</div><!-- subcategory block -->
					</div>
					<button class="category">Тепловое оборудование</button>
					<div class="left_sidebar_catalog_subcategories">
						<div class="subcategory_block first_line" data-category='Тепловое'>
							<ul>
								@foreach ($subcats['domestic']['Тепловое'] as $subcat)
									<li>
										{{ HTML::link("/Тепловое/$subcat->subcat?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
									</li>
								@endforeach
							</ul>
						</div><!-- subcategory block -->
					</div>
					<button class="category">Холодильное оборудование</button>
					<div class="left_sidebar_catalog_subcategories">
						<div class="subcategory_block first_line" data-category='Холодильное'>
							<ul>
								@foreach ($subcats['domestic']['Холодильное'] as $subcat)
									<li>
										{{ HTML::link("/Холодильное/$subcat->subcat?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
									</li>
								@endforeach
							</ul>
						</div><!-- subcategory block -->
					</div>
					<button class="category">Посудомоечное оборудование</button>
					<div class="left_sidebar_catalog_subcategories">
						<div class="subcategory_block first_line" data-category='Посудомоечное'>
							<ul>
								@foreach ($subcats['domestic']['Посудомоечное'] as $subcat)
									<li>
										{{ HTML::link("/Посудомоечное/$subcat->subcat?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
									</li>
								@endforeach
							</ul>
						</div><!-- subcategory block -->
					</div>
				</div>
			</div>
		</div>	
	</div>	
@stop	