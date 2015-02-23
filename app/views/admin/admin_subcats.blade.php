@extends('layout')
@extends('admin/admin_header')
@extends('admin/admin_sidebar')
@extends('admin/admin_footer')
@section('css')
	{{ HTML::style('css/admin.css') }}<!--delete it-->
@stop

@section('body')
	<h1 class="admin_uni_heading">Подкатегории</h1>
	<div class="admin_one_cat_block"><!--8 -->
		<div class="catalog_category" data-category='Механическое_en'>
			<h4 class="admin_one_cat_heading">Механическое <br> оборудование(импортное)</h4>
			<a href="#" class="admin_one_cat_add"><i class="fa fa-plus"></i>&nbsp Добавить подкатегорию</a>
			<div class="admin_one_cat_subcats_block">
				<table class="admin_subcats_list">
					@foreach ($subcats['Механическое_en'] as $subcat)
						<tr>
							<td>
								<p class="admin_subcategory">
									{{ $subcat->subcat }}
									<a href="/admin/change_subcat?subcat_id={{$subcat->subcat_id}}"><i class="fa fa-pencil change_icon"></i></a>
									{{ Form::open(array('url' => "/delete_subcat", 'method' => 'POST', 'class'=>'')) }}
										<i class="fa fa-times delete_icon"></i>
										{{ Form::submit('Сохранить', ['class'=>'hidden']) }}
									{{ Form::close() }} 
								</p>
							</td>
						</tr>	
					@endforeach
				</table><!--need to change foreach-->
			</div>
		<div class="catalog_category" data-category='Тепловое_en'>
					<h4 class="admin_one_cat_heading">Тепловое <br> оборудование(импортное)</h4>
			<a href="#" class="admin_one_cat_add"><i class="fa fa-plus"></i>&nbsp Добавить подкатегорию</a>
			<div class="admin_one_cat_subcats_block">
				<table class="admin_subcats_list">
					@foreach ($subcats['Тепловое_en'] as $subcat)
						<tr>
							<td>
								<p class="admin_subcategory">
									{{ $subcat->subcat }}
									<i class="fa fa-pencil change_icon"></i>
									<i class="fa fa-times delete_icon"></i>
								</p>
							</td>
						</tr>	
					@endforeach
				</table><!--need to change foreach-->
			</div>
		</div>
		<div class="catalog_category" data-category='Холодильное_en'>
					<h4 class="admin_one_cat_heading">Холодильное <br> оборудование(импортное)</h4>
			<a href="#" class="admin_one_cat_add"><i class="fa fa-plus"></i>&nbsp Добавить подкатегорию</a>
			<div class="admin_one_cat_subcats_block">
				<table class="admin_subcats_list">
					@foreach ($subcats['Холодильное_en'] as $subcat)
						<tr>
							<td>
								<p class="admin_subcategory">
									{{ $subcat->subcat }}
									<i class="fa fa-pencil change_icon"></i>
									<i class="fa fa-times delete_icon"></i>
								</p>
							</td>
						</tr>	
					@endforeach
				</table><!--need to change foreach-->
			</div>
		</div>
		<div class="catalog_category" data-category='Механическое_ru'>
					<h4 class="admin_one_cat_heading">Механическое <br> оборудование(российское)</h4>
			<a href="#" class="admin_one_cat_add"><i class="fa fa-plus"></i>&nbsp Добавить подкатегорию</a>
			<div class="admin_one_cat_subcats_block">
				<table class="admin_subcats_list">
					@foreach ($subcats['Механическое_ru'] as $subcat)
						<tr>
							<td>
								<p class="admin_subcategory">
									{{ $subcat->subcat }}
									<i class="fa fa-pencil change_icon"></i>
									<i class="fa fa-times delete_icon"></i>
								</p>
							</td>
						</tr>	
					@endforeach
				</table><!--need to change foreach-->
			</div>
		</div>
		<div class="catalog_category" data-category='Тепловое_ru'>
			<h4 class="admin_one_cat_heading">Тепловое <br> оборудование(российское)</h4>
			<a href="#" class="admin_one_cat_add"><i class="fa fa-plus"></i>&nbsp Добавить подкатегорию</a>
			<div class="admin_one_cat_subcats_block">
				<table class="admin_subcats_list">
					@foreach ($subcats['Тепловое_ru'] as $subcat)
						<tr>
							<td>
								<p class="admin_subcategory">
									{{ $subcat->subcat }}
									<i class="fa fa-pencil change_icon"></i>
									<i class="fa fa-times delete_icon"></i>
								</p>
							</td>
						</tr>	
					@endforeach
				</table><!--need to change foreach-->
			</div>
		</div>
		<div class="catalog_category posud_catedory" data-category='Посудомоечное_en'>
			<h4 class="admin_one_cat_heading">Посудомоечное <br> оборудование(импортное)</h4>
			<a href="#" class="admin_one_cat_add"><i class="fa fa-plus"></i>&nbsp Добавить подкатегорию</a>
			<div class="admin_one_cat_subcats_block">
				<table class="admin_subcats_list">
					@foreach ($subcats['Посудомоечное_en'] as $subcat)
						<tr>
							<td>
								<p class="admin_subcategory">
									{{ $subcat->subcat }}
									<i class="fa fa-pencil change_icon"></i>
									<i class="fa fa-times delete_icon"></i>
								</p>
							</td>
						</tr>	
					@endforeach
				</table><!--need to change foreach-->
			</div>
		</div>
		<div class="catalog_category" data-category='Холодильное_ru'>
					<h4 class="admin_one_cat_heading">Холодильное <br> оборудование(российское)</h4>
			<a href="#" class="admin_one_cat_add"><i class="fa fa-plus"></i>&nbsp Добавить подкатегорию</a>
			<div class="admin_one_cat_subcats_block">
				<table class="admin_subcats_list">
					@foreach ($subcats['Холодильное_ru'] as $subcat)
						<tr>
							<td>
								<p class="admin_subcategory">
									{{ $subcat->subcat }}
									<i class="fa fa-pencil change_icon"></i>
									<i class="fa fa-times delete_icon"></i>
								</p>
							</td>
						</tr>	
					@endforeach
				</table><!--need to change foreach-->
			</div>
		</div>
		<div class="catalog_category posud_catedory" data-category='Посудомоечное_ru'>
			<h4 class="admin_one_cat_heading">Посудомоечное <br> оборудование(российское)</h4>
			<a href="#" class="admin_one_cat_add"><i class="fa fa-plus"></i>&nbsp Добавить подкатегорию</a>
			<div class="admin_one_cat_subcats_block">
				<table class="admin_subcats_list">
					@foreach ($subcats['Посудомоечное_ru'] as $subcat)
						<tr>
							<td>
								<p class="admin_subcategory">
									{{ $subcat->subcat }}
									<i class="fa fa-pencil change_icon"></i>
									<i class="fa fa-times delete_icon"></i>
								</p>
							</td>
						</tr>	
					@endforeach
				</table><!--need to change foreach-->
			</div>
		</div>
	</div>
@stop
