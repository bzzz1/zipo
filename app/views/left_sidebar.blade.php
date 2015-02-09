<div class="left_sidebar">
	<div class="container_sidebar">
		{{ Form::open(array('url' => "/search", 'method' => 'GET', 'class'=>'form-inline left_sidebar_search')) }}
			{{ Form::text('query', null, ['placeholder'=>"Поиск по каталогу", 'class'=>'form-control', 'id' =>'search']) }} 
		{{ Form::close() }}
		<div class="left_sidebar_catalog">
			<h3 class="left_sidebar_catalog">Каталог</h3>
			<h4 class="left_sidebar_heading">Импортное</h4>
				<div class="left_sidebar_catalog_categories">
					<a href="#" class="category">Механическое оборудование</a>
					<div class="left_sidebar_catalog_subcategories">
						<div class="subcategory_block first_line" data-category='Механическое'>
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
						</div><!-- subcategory block -->
					</div>
				</div>
				<div class="left_sidebar_catalog_categories">
					<a href="#" class="category">Тепловое оборудование</a>
					<div class="left_sidebar_catalog_subcategories">
						<div class="subcategory_block first_line" data-category='Тепловое'>
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
						</div><!-- subcategory block -->
					</div>
				</div>
				<div class="left_sidebar_catalog_categories">
					<a href="#" class="category">Холодильное оборудование</a>
					<div class="left_sidebar_catalog_subcategories">
						<div class="subcategory_block first_line" data-category='Холодильное'>
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
						</div><!-- subcategory block -->
					</div>
				</div>
				<div class="left_sidebar_catalog_categories">
					<a href="#" class="category">Посудомоечное оборудование</a>
					<div class="left_sidebar_catalog_subcategories">
						<div class="subcategory_block first_line" data-category='Посудомоечное'>
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
						</div><!-- subcategory block -->
					</div>
				</div>
			<h4 class="left_sidebar_heading">Российское</h4>
			<div class="left_sidebar_catalog_categories">
					<a href="#" class="category">Механическое оборудование</a>
					<div class="left_sidebar_catalog_subcategories">
						<div class="subcategory_block first_line" data-category='Механическое'>
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
						</div><!-- subcategory block -->
					</div>
				</div>
				<div class="left_sidebar_catalog_categories">
					<a href="#" class="category">Тепловое оборудование</a>
					<div class="left_sidebar_catalog_subcategories">
						<div class="subcategory_block first_line" data-category='Тепловое'>
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
						</div><!-- subcategory block -->
					</div>
				</div>
				<div class="left_sidebar_catalog_categories">
					<a href="#" class="category">Холодильное оборудование</a>
					<div class="left_sidebar_catalog_subcategories">
						<div class="subcategory_block first_line" data-category='Холодильное'>
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
						</div><!-- subcategory block -->
					</div>
				</div>
				<div class="left_sidebar_catalog_categories">
					<a href="#" class="category">Посудомоечное оборудование</a>
					<div class="left_sidebar_catalog_subcategories">
						<div class="subcategory_block first_line" data-category='Посудомоечное'>
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
						</div><!-- subcategory block -->
					</div>
				</div>
		</div>	
		<div class="left_sidebar_recent">
			<h3 class="recent_heading">Недавно просмотренные</h3>
			<a href="" class="recent_link"><img src="" alt="" class="recent_1"></a>
			<a href="" class="recent_link"><img src="" alt="" class="recent_2"></a>
			<a href="" class="recent_link"><img src="" alt="" class="recent_3"></a>
			<a href="" class="recent_link"><img src="" alt="" class="recent_4"></a>
			<a href="" class="recent_link"><img src="" alt="" class="recent_5"></a>
			<a href="" class="recent_link"><img src="" alt="" class="recent_6"></a>
		</div>
	</div>
</div>