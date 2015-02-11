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
								@foreach ($subcats['Механическое_en'] as $subcat)
									<li>
										{{ HTML::link(App::make("HelperController")->url_slug("/Механическое/$subcat->subcat")."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
									</li>
								@endforeach
							</ul>
						</div><!-- subcategory block -->
					</div>
					<button class="category">Тепловое оборудование</button>
					<div class="left_sidebar_catalog_subcategories">
						<div class="subcategory_block first_line" data-category='Тепловое'>
							<ul>
								@foreach ($subcats['Тепловое_en'] as $subcat)
									<li>
										{{ HTML::link(App::make("HelperController")->url_slug("/Тепловое/$subcat->subcat")."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
									</li>
								@endforeach
							</ul>
						</div><!-- subcategory block -->
					</div>
					<button class="category">Холодильное оборудование</button>
					<div class="left_sidebar_catalog_subcategories">
						<div class="subcategory_block first_line" data-category='Холодильное'>
							<ul>
								@foreach ($subcats['Холодильное_en'] as $subcat)
									<li>
										{{ HTML::link(App::make("HelperController")->url_slug("/Холодильное/$subcat->subcat")."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
									</li>
								@endforeach
							</ul>
						</div><!-- subcategory block -->
					</div>
					<button class="category">Посудомоечное оборудование</button>
					<div class="left_sidebar_catalog_subcategories">
						<div class="subcategory_block first_line" data-category='Посудомоечное'>
							<ul>
								@foreach ($subcats['Механическое_en'] as $subcat)
									<li>
										{{ HTML::link(App::make("HelperController")->url_slug("/Посудомоечное/$subcat->subcat")."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
									</li>
								@endforeach
							</ul>
						</div><!-- subcategory block -->
					</div>
					<h4 class="left_sidebar_heading">Отечественное</h4>
					<button class="category">Механическое оборудование</button>
					<div class="left_sidebar_catalog_subcategories">
						<div class="subcategory_block first_line" data-category='Механическое'>
							<ul>
								@foreach ($subcats['Механическое_ru'] as $subcat)
									<li>
										{{ HTML::link(App::make("HelperController")->url_slug("/Механическое/$subcat->subcat")."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
									</li>
								@endforeach
							</ul>
						</div><!-- subcategory block -->
					</div>
					<button class="category">Тепловое оборудование</button>
					<div class="left_sidebar_catalog_subcategories">
						<div class="subcategory_block first_line" data-category='Тепловое'>
							<ul>
								@foreach ($subcats['Тепловое_ru'] as $subcat)
									<li>
										{{ HTML::link(App::make("HelperController")->url_slug("/Тепловое/$subcat->subcat")."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
									</li>
								@endforeach
							</ul>
						</div><!-- subcategory block -->
					</div>
					<button class="category">Холодильное оборудование</button>
					<div class="left_sidebar_catalog_subcategories">
						<div class="subcategory_block first_line" data-category='Холодильное'>
							<ul>
								@foreach ($subcats['Холодильное_ru'] as $subcat)
									<li>
										{{ HTML::link(App::make("HelperController")->url_slug("/Холодильное/$subcat->subcat")."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
									</li>
								@endforeach
							</ul>
						</div><!-- subcategory block -->
					</div>
					<button class="category">Посудомоечное оборудование</button>
					<div class="left_sidebar_catalog_subcategories">
						<div class="subcategory_block first_line" data-category='Посудомоечное'>
							<ul>
								@foreach ($subcats['Посудомоечное_ru'] as $subcat)
									<li>
										{{ HTML::link(App::make("HelperController")->url_slug("/Посудомоечное/$subcat->subcat")."?subcat_id=$subcat->subcat_id", $subcat->subcat) }}
									</li>
								@endforeach
							</ul>
						</div><!-- subcategory block -->
					</div>
				</div>
			</div>
			<div class="left_sidebar_recent">
				<h3 class="recent_heading">Недавно просмотренные</h3>
				{{--@foreach ($recents as $recent)
					<a href="/{{$recent->category}}/{{$recent->subcat}}/{{$recent->title}}?item_code={{$recent->code}}" class="recent_link"><img src="/img/photos/{{$recent->photo}}" alt="{{$recent->title}}" class="recent"></a>
				@endforeach--}}
			</div>
		</div>	
	</div>	
@stop	