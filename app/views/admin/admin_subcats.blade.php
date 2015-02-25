@extends('partials/admin_layout')
@extends('partials/admin_header')
@extends('partials/admin_sidebar')
@extends('partials/admin_footer')

@section('body')
	<h1 class="admin_uni_heading">Подкатегории</h1>
	<div class="admin_one_cat_block admin_main_content">
		<div class="admin_catalog_category" data-category='Механическое_en'>
			<h4 class="admin_one_cat_heading">Механическое <br> оборудование(импортное)</h4>
			<a href="/admin/change_subcat" class="admin_one_cat_add"><i class="fa fa-plus">&nbsp</i>Добавить подкатегорию</a>
			@if (count($subcats['Механическое_en']))
				<div class="admin_one_cat_subcats_block">
					<div class="admin_subcats_list">
						<div class="subcategory_left">
							<ul>
								@foreach ($HELP::columnize($subcats['Механическое_en'], 2, 1) as $subcat)
									<li>
										<p class="admin_subcategory">
											{{ $subcat->subcat }}
											<a href="/admin/change_subcat?subcat_id={{$subcat->subcat_id}}"><i class="fa fa-pencil change_icon"></i></a>
											{{ Form::open(array('url' => "/admin/delete_subcat?subcat_id=$subcat->subcat_id", 'method' => 'POST', 'class'=>'admin_subcategory_form')) }}
												<i class="fa fa-times delete_icon"></i>
											{{ Form::close() }} 
										</p>
									</li>
								@endforeach
							</ul>
						</div>
						<div class="subcategory_right">
							<ul>	
								@foreach ($HELP::columnize($subcats['Механическое_en'], 2, 2) as $subcat)
									<li>
										<p class="admin_subcategory">
											{{ $subcat->subcat }}
											<a href="/admin/change_subcat?subcat_id={{$subcat->subcat_id}}"><i class="fa fa-pencil change_icon"></i></a>
											{{ Form::open(array('url' => "/admin/delete_subcat?subcat_id=$subcat->subcat_id", 'method' => 'POST', 'class'=>'admin_subcategory_form')) }}
												<i class="fa fa-times delete_icon"></i>
											{{ Form::close() }} 
										</p>
									</li>
								@endforeach
							</ul>	
						</div>	
					</div><!-- admin_subcats_list -->
				</div><!--admin_one_cat_subcats_block-->
			@endif
		</div>	
		<div class="admin_catalog_category" data-category='Тепловое_en'>
			<h4 class="admin_one_cat_heading">Тепловое <br> оборудование(импортное)</h4>
			<a href="/admin/change_subcat" class="admin_one_cat_add"><i class="fa fa-plus">&nbsp</i>Добавить подкатегорию</a>
			@if (count($subcats['Тепловое_en']))
				<div class="admin_one_cat_subcats_block">
				<div class="admin_subcats_list">
					<div class="subcategory_left">
						<ul>
							@foreach ($HELP::columnize($subcats['Тепловое_en'], 2, 1) as $subcat)
								<li>
									<p class="admin_subcategory">
										{{ $subcat->subcat }}
										<a href="/admin/change_subcat?subcat_id={{$subcat->subcat_id}}"><i class="fa fa-pencil change_icon"></i></a>
										{{ Form::open(array('url' => "/admin/delete_subcat?subcat_id=$subcat->subcat_id", 'method' => 'POST', 'class'=>'admin_subcategory_form')) }}
											<i class="fa fa-times delete_icon"></i>
										{{ Form::close() }} 
									</p>
								</li>
							@endforeach
						</ul>
					</div>
					<div class="subcategory_right">
						<ul>	
							@foreach ($HELP::columnize($subcats['Тепловое_en'], 2, 2) as $subcat)
								<li>
									<p class="admin_subcategory">
										{{ $subcat->subcat }}
										<a href="/admin/change_subcat?subcat_id={{$subcat->subcat_id}}"><i class="fa fa-pencil change_icon"></i></a>
										{{ Form::open(array('url' => "/admin/delete_subcat?subcat_id=$subcat->subcat_id", 'method' => 'POST', 'class'=>'admin_subcategory_form')) }}
											<i class="fa fa-times delete_icon"></i>
										{{ Form::close() }} 
									</p>
								</li>
							@endforeach
						</ul>	
					</div>
				</div><!-- admin_subcats_list -->		
				</div><!--admin_one_cat_subcats_block-->
			@endif
		</div>
		<div class="admin_catalog_category" data-category='Холодильное_en'>
			<h4 class="admin_one_cat_heading">Холодильное <br> оборудование(импортное)</h4>
			<a href="/admin/change_subcat" class="admin_one_cat_add"><i class="fa fa-plus">&nbsp</i>Добавить подкатегорию</a>
			@if (count($subcats['Холодильное_en']))
				<div class="admin_one_cat_subcats_block">
				<div class="admin_subcats_list">
					<div class="subcategory_left">
							<ul>
								@foreach ($HELP::columnize($subcats['Холодильное_en'], 2, 1) as $subcat)
									<li>
										<p class="admin_subcategory">
											{{ $subcat->subcat }}
											<a href="/admin/change_subcat?subcat_id={{$subcat->subcat_id}}"><i class="fa fa-pencil change_icon"></i></a>
											{{ Form::open(array('url' => "/admin/delete_subcat?subcat_id=$subcat->subcat_id", 'method' => 'POST', 'class'=>'admin_subcategory_form')) }}
												<i class="fa fa-times delete_icon"></i>
											{{ Form::close() }} 
										</p>
									</li>
								@endforeach
							</ul>
					</div>
					<div class="subcategory_right">
							<ul>	
								@foreach ($HELP::columnize($subcats['Холодильное_en'], 2, 2) as $subcat)
									<li>
										<p class="admin_subcategory">
											{{ $subcat->subcat }}
											<a href="/admin/change_subcat?subcat_id={{$subcat->subcat_id}}"><i class="fa fa-pencil change_icon"></i></a>
											{{ Form::open(array('url' => "/admin/delete_subcat?subcat_id=$subcat->subcat_id", 'method' => 'POST', 'class'=>'admin_subcategory_form')) }}
												<i class="fa fa-times delete_icon"></i>
											{{ Form::close() }} 
										</p>
									</li>
								@endforeach
							</ul>	
					</div>	
				</div><!-- admin_subcats_list -->	
				</div><!--admin_one_cat_subcats_block-->
			@endif
		</div>
		<div class="admin_catalog_category posud_catedory" data-category='Посудомоечное_en'>
			<h4 class="admin_one_cat_heading">Посудомоечное <br> оборудование(импортное)</h4>
			<a href="/admin/change_subcat" class="admin_one_cat_add"><i class="fa fa-plus">&nbsp</i>Добавить подкатегорию</a>
			@if (count($subcats['Посудомоечное_en']))
				<div class="admin_one_cat_subcats_block">
				<div class="admin_subcats_list">
					<div class="subcategory_left">
							<ul>
								@foreach ($HELP::columnize($subcats['Посудомоечное_en'], 2, 1) as $subcat)
									<li>
										<p class="admin_subcategory">
											{{ $subcat->subcat }}
											<a href="/admin/change_subcat?subcat_id={{$subcat->subcat_id}}"><i class="fa fa-pencil change_icon"></i></a>
											{{ Form::open(array('url' => "/admin/delete_subcat?subcat_id=$subcat->subcat_id", 'method' => 'POST', 'class'=>'admin_subcategory_form')) }}
												<i class="fa fa-times delete_icon"></i>
											{{ Form::close() }} 
										</p>
									</li>
								@endforeach
							</ul>
					</div>
					<div class="subcategory_right">
							<ul>	
								@foreach ($HELP::columnize($subcats['Посудомоечное_en'], 2, 2) as $subcat)
									<li>
										<p class="admin_subcategory">
											{{ $subcat->subcat }}
											<a href="/admin/change_subcat?subcat_id={{$subcat->subcat_id}}"><i class="fa fa-pencil change_icon"></i></a>
											{{ Form::open(array('url' => "/admin/delete_subcat?subcat_id=$subcat->subcat_id", 'method' => 'POST', 'class'=>'admin_subcategory_form')) }}
												<i class="fa fa-times delete_icon"></i>
											{{ Form::close() }} 
										</p>
									</li>
								@endforeach
							</ul>	
					</div>	
				</div><!-- admin_subcats_list -->
				</div><!--admin_one_cat_subcats_block-->
			@endif	
		</div>
		<div class="admin_catalog_category" data-category='Механическое_ru'>
			<h4 class="admin_one_cat_heading">Механическое <br> оборудование(российское)</h4>
			<a href="/admin/change_subcat" class="admin_one_cat_add"><i class="fa fa-plus">&nbsp</i>Добавить подкатегорию</a>
			@if (count($subcats['Механическое_ru']))
				<div class="admin_one_cat_subcats_block">
					<div class="admin_subcats_list">
						<div class="subcategory_left">
								<ul>
									@foreach ($HELP::columnize($subcats['Механическое_ru'], 2, 1) as $subcat)
										<li>
											<p class="admin_subcategory">
												{{ $subcat->subcat }}
												<a href="/admin/change_subcat?subcat_id={{$subcat->subcat_id}}"><i class="fa fa-pencil change_icon"></i></a>
												{{ Form::open(array('url' => "/admin/delete_subcat?subcat_id=$subcat->subcat_id", 'method' => 'POST', 'class'=>'admin_subcategory_form')) }}
													<i class="fa fa-times delete_icon"></i>
												{{ Form::close() }} 
											</p>
										</li>
									@endforeach
								</ul>
						</div>
						<div class="subcategory_right">
								<ul>	
									@foreach ($HELP::columnize($subcats['Механическое_ru'], 2, 2) as $subcat)
										<li>
											<p class="admin_subcategory">
												{{ $subcat->subcat }}
												<a href="/admin/change_subcat?subcat_id={{$subcat->subcat_id}}"><i class="fa fa-pencil change_icon"></i></a>
												{{ Form::open(array('url' => "/admin/delete_subcat?subcat_id=$subcat->subcat_id", 'method' => 'POST', 'class'=>'admin_subcategory_form')) }}
													<i class="fa fa-times delete_icon"></i>
												{{ Form::close() }} 
											</p>
										</li>
									@endforeach
								</ul>	
						</div>
					</div><!-- admin_subcats_list -->	
				</div><!--admin_one_cat_subcats_block-->
			@endif	
		</div>
		<div class="admin_catalog_category" data-category='Тепловое_ru'>
			<h4 class="admin_one_cat_heading">Тепловое <br> оборудование(российское)</h4>
			<a href="/admin/change_subcat" class="admin_one_cat_add"><i class="fa fa-plus">&nbsp</i>Добавить подкатегорию</a>
			@if (count($subcats['Тепловое_ru']))
				<div class="admin_one_cat_subcats_block">
				<div class="admin_subcats_list">
					<div class="subcategory_left">
							<ul>
								@foreach ($HELP::columnize($subcats['Тепловое_ru'], 2, 1) as $subcat)
									<li>
										<p class="admin_subcategory">
											{{ $subcat->subcat }}
											<a href="/admin/change_subcat?subcat_id={{$subcat->subcat_id}}"><i class="fa fa-pencil change_icon"></i></a>
											{{ Form::open(array('url' => "/admin/delete_subcat?subcat_id=$subcat->subcat_id", 'method' => 'POST', 'class'=>'admin_subcategory_form')) }}
												<i class="fa fa-times delete_icon"></i>
											{{ Form::close() }} 
										</p>
									</li>
								@endforeach
							</ul>
					</div>
					<div class="subcategory_right">
						<ul>	
							@foreach ($HELP::columnize($subcats['Тепловое_ru'], 2, 2) as $subcat)
								<li>
									<p class="admin_subcategory">
										{{ $subcat->subcat }}
										<a href="/admin/change_subcat?subcat_id={{$subcat->subcat_id}}"><i class="fa fa-pencil change_icon"></i></a>
										{{ Form::open(array('url' => "/admin/delete_subcat?subcat_id=$subcat->subcat_id", 'method' => 'POST', 'class'=>'admin_subcategory_form')) }}
											<i class="fa fa-times delete_icon"></i>
										{{ Form::close() }} 
									</p>
								</li>
							@endforeach
						</ul>	
					</div>	
				</div><!-- admin_subcats_list -->
				</div><!--admin_one_cat_subcats_block-->
			@endif	
		</div>
		<div class="admin_catalog_category" data-category='Холодильное_ru'>
			<h4 class="admin_one_cat_heading">Холодильное <br> оборудование(российское)</h4>
			<a href="/admin/change_subcat" class="admin_one_cat_add"><i class="fa fa-plus">&nbsp</i>Добавить подкатегорию</a>
			@if (count($subcats['Холодильное_ru']))
				<div class="admin_one_cat_subcats_block">
				<div class="admin_subcats_list">
					<div class="subcategory_left">
							<ul>
								@foreach ($HELP::columnize($subcats['Холодильное_ru'], 2, 1) as $subcat)
									<li>
										<p class="admin_subcategory">
											{{ $subcat->subcat }}
											<a href="/admin/change_subcat?subcat_id={{$subcat->subcat_id}}"><i class="fa fa-pencil change_icon"></i></a>
											{{ Form::open(array('url' => "/admin/delete_subcat?subcat_id=$subcat->subcat_id", 'method' => 'POST', 'class'=>'admin_subcategory_form')) }}
												<i class="fa fa-times delete_icon"></i>
											{{ Form::close() }} 
										</p>
									</li>
								@endforeach
							</ul>
					</div>
					<div class="subcategory_right">
						<ul>	
							@foreach ($HELP::columnize($subcats['Холодильное_ru'], 2, 2) as $subcat)
								<li>
									<p class="admin_subcategory">
										{{ $subcat->subcat }}
										<a href="/admin/change_subcat?subcat_id={{$subcat->subcat_id}}"><i class="fa fa-pencil change_icon"></i></a>
										{{ Form::open(array('url' => "/admin/delete_subcat?subcat_id=$subcat->subcat_id", 'method' => 'POST', 'class'=>'admin_subcategory_form')) }}
											<i class="fa fa-times delete_icon"></i>
										{{ Form::close() }} 
									</p>
								</li>
							@endforeach
						</ul>	
					</div>
				</div><!-- admin_subcats_list -->	
				</div><!--admin_one_cat_subcats_block-->
			@endif	
		</div>
		<div class="admin_catalog_category posud_catedory" data-category='Посудомоечное_ru'>
			<h4 class="admin_one_cat_heading">Посудомоечное <br> оборудование(российское)</h4>
			<a href="/admin/change_subcat" class="admin_one_cat_add"><i class="fa fa-plus">&nbsp</i>Добавить подкатегорию</a>
			@if (count($subcats['Посудомоечное_ru']))
				<div class="admin_one_cat_subcats_block">
				<div class="admin_subcats_list">
					<div class="subcategory_left">
						<ul>
							@foreach ($HELP::columnize($subcats['Посудомоечное_ru'], 2, 1) as $subcat)
								<li>
									<p class="admin_subcategory">
										{{ $subcat->subcat }}
										<a href="/admin/change_subcat?subcat_id={{$subcat->subcat_id}}"><i class="fa fa-pencil change_icon"></i></a>
										{{ Form::open(array('url' => "/admin/delete_subcat?subcat_id=$subcat->subcat_id", 'method' => 'POST', 'class'=>'admin_subcategory_form')) }}
											<i class="fa fa-times delete_icon"></i>
										{{ Form::close() }} 
									</p>
								</li>
							@endforeach
						</ul>
					</div>
					<div class="subcategory_right">
						<ul>	
							@foreach ($HELP::columnize($subcats['Посудомоечное_ru'], 2, 2) as $subcat)
								<li>
									<p class="admin_subcategory">
										{{ $subcat->subcat }}
										<a href="/admin/change_subcat?subcat_id={{$subcat->subcat_id}}"><i class="fa fa-pencil change_icon"></i></a>
										{{ Form::open(array('url' => "/admin/delete_subcat?subcat_id=$subcat->subcat_id", 'method' => 'POST', 'class'=>'admin_subcategory_form')) }}
											<i class="fa fa-times delete_icon"></i>
										{{ Form::close() }} 
									</p>
								</li>
							@endforeach
						</ul>	
					</div>
				</div><!-- admin_subcats_list -->
				</div><!--admin_one_cat_subcats_block-->
			@endif	
		</div>
	</div>
@stop
