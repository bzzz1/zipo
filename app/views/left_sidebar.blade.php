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
				</div>
			</div>
		</div>	
	</div>	
@stop	