@section('left_sidebar')	
	<div class="left_sidebar">
		<div class="container_sidebar">
			{{ Form::open(array('url' => "/search", 'method' => 'GET', 'class'=>'form-inline left_sidebar_search')) }}
				{{ Form::text('query', null, ['placeholder'=>"Поиск по каталогу", 'class'=>'form-control left_sidebar_input', 'id' =>'search']) }} 
			{{ Form::close() }}
			<div class="left_sidebar_catalog">
				<h3 class="left_sidebar_catalog_main_heading">Каталог</h3><br>
				<h4 class="left_sidebar_heading">Импортное</h4>
				<div class="left_sidebar_catalog_categories">
					<ul class="left_sidebar_categories">
						<li><a href="#" class="category">Механическое оборудование</a></li>
						<li><a href="#" class="category">Тепловое оборудование</a></li>
						<li><a href="#" class="category">Холодильное оборудование</a></li>
						<li><a href="#" class="category">Посудомоечное оборудование</a></li>
					</ul>	
					<h4 class="left_sidebar_heading">Отечественное</h4>
					<ul class="left_sidebar_categories">
						<li><a href="#" class="category">Механическое оборудование</a></li>
						<li><a href="#" class="category">Тепловое оборудование</a></li>
						<li><a href="#" class="category">Холодильное оборудование</a></li>
						<li><a href="#" class="category">Посудомоечное оборудование</a></li>
					</ul>	
				</div>
			</div>
			<div class="left_sidebar_recent">
				<h3 class="recent_heading">Недавно просмотренные</h3>
				@foreach ($recents as $recent)
					<a href='{{ URL::to($HELP::url_slug(["/", "$recent->category", "/", "$recent->subcat", "/", "$recent->title"])."?subcat_id=$recent->subcat_id&item_id=$recent->item_id") }}' class="recent_link">
						<img src="/img/photos/{{$recent->photo}}" alt="{{$recent->title}}" class="recent">
					</a>
				@endforeach
			</div>
		</div>	
	</div>	
@stop	