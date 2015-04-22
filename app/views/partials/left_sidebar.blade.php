@section('left_sidebar')	
	<div class="left_sidebar">
		<div class="container_sidebar">
			{{ Form::open(array('url' => "/search", 'method' => 'GET', 'class'=>'form-inline left_sidebar_search')) }}
				{{ Form::text('query', null, ['placeholder'=>"Поиск по каталогу", 'class'=>'form-control left_sidebar_input', 'id' =>'search']) }} 
			{{ Form::close() }}
			<div class="left_sidebar_catalog">
				<a  href="/"class="left_sidebar_catalog_main_heading">Каталог</a><br>
				<h4 class="left_sidebar_heading">Импортное</h4>
				<div class="left_sidebar_catalog_categories">
					<ul class="left_sidebar_categories">
						<li>
							{{ HTML::link($HELP::url_slug(['/','category', '/', 'Механическое_en']), "Механическое оборудование") }}
						</li>
						<li>
							{{ HTML::link($HELP::url_slug(['/','category', '/', 'Тепловое_en']), "Тепловое оборудование") }}
						</li>	
						<li>
							{{ HTML::link($HELP::url_slug(['/','category', '/', 'Холодильное_en']), "Холодильное оборудование") }}
						</li>	
						<li>
							{{ HTML::link($HELP::url_slug(['/','category', '/', 'Посудомоечное_en']), "Посудомоечное оборудование") }}
						</li>	
					</ul>	
					<h4 class="left_sidebar_heading">Отечественное</h4>
					<ul class="left_sidebar_categories">
						<li>
							{{ HTML::link($HELP::url_slug(['/','category', '/', 'Механическое_ru']), "Механическое оборудование") }}
						</li>
						<li>
							{{ HTML::link($HELP::url_slug(['/','category', '/', 'Тепловое_ru']), "Тепловое оборудование") }}
						</li>	
						<li>
							{{ HTML::link($HELP::url_slug(['/','category', '/', 'Холодильное_ru']), "Холодильное оборудование") }}
						</li>	
						<li>
							{{ HTML::link($HELP::url_slug(['/','category', '/', 'Посудомоечное_ru']), "Посудомоечное оборудование") }}
						</li>
					</ul>	
				</div>
			</div>
			<a href="/pdf" class="watch_details">Посмотреть все деталировки</a>
			<div class="left_sidebar_recent">
				@if ($recents)
				<h3 class="recent_heading">Недавно просмотренные</h3>
				@foreach ($recents as $recent)
					<a href='{{ URL::to($HELP::url_slug(["/", "$recent->category", "/", "$recent->subcat", "/", "$recent->title"])."?subcat_id=$recent->subcat_id&item_id=$recent->item_id") }}' class="recent_link">
						<img src="/img/photos/{{$recent->photo}}" alt="{{$recent->title}}" class="recent">
					</a>
				@endforeach
				@endif
			</div>
		</div>	
	</div>
@stop	