@extends('layout')
@extends('admin/admin_header')
@extends('admin/admin_sidebar')
@extends('admin/admin_footer')

@section('body')
	<h1 class="admin_uni_heading">Подкатегории</h1>
	<div class="admin_one_cat_block"><!--8 -->
		<h4 class="admin_one_cat_heading">{{--getNormal(category_name)}} <br> оборудование</h4>
		<a href="#" class="admin_one_cat_add"><i class="fa fa-plus"></i>&nbsp Добавить подкатегорию</a>
		<div class="admin_one_cat_subcats_block">
			<table class="admin_subcats_list">
				{{--@foreach ($subcats as $subcat)--}}
					<tr>
						<td>
							<p class="admin_subcategory">
								{{--$subcat->subcat--}} 
								<i class="fa fa-pencil change_icon"></i>
								<i class="fa fa-times delete_icon"></i>
							</p>
						</td>
					</tr>	
				{{--@endforeach--}}
			</table><!--need to change foreach-->
		</div>
	</div>
@stop
