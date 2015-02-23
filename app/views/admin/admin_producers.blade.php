@extends('layout')
@extends('admin/admin_header')
@extends('admin/admin_sidebar')
@extends('admin/admin_footer')
@section('css')
	{{ HTML::style('css/admin.css') }}<!--delete it-->
@stop

@section('body')
	<h1 class="admin_uni_heading">Производители</h1>
	<div class="admin_main_content">
		<a href="#" class="admin_producer_add"><i class="fa fa-plus"></i>&nbsp Добавить производителя</a>
		<div class = "groups">
			<div class="brands_column">
				<div class="producers_first">
					<table class="producers_list producers_first">
						@foreach ($HELP::columnize($producers, 4, 1) as $producer)
							<tr>
								<td>
									<p class="admin_producer_one">
										{{$producer->producer}} 
										<i class="fa fa-pencil change_prod_icon"></i>
										<i class="fa fa-times delete_prod_icon"></i>
									</p>
								</td>
							</tr>
						@endforeach
					</table>
				</div>
				<div class="producers_second">
					<table class="producers_list producers_second">
						@foreach ($HELP::columnize($producers, 4, 2) as $producer)
							<tr>
								<td>
									<p class="admin_producer_one">
										{{$producer->producer}} 
										<i class="fa fa-pencil change_prod_icon"></i>
										<i class="fa fa-times delete_prod_icon"></i>
									</p>
								</td>
							</tr>	
						@endforeach
					</table>	
				</div>
				<div class="producers_third">
					<table class="producers_list producers_third">
						@foreach ($HELP::columnize($producers, 4, 3) as $producer)
							<tr>
								<td>
									<p class="admin_producer_one">
										{{$producer->producer}} 
										<i class="fa fa-pencil change_prod_icon"></i>
										<i class="fa fa-times delete_prod_icon"></i>
									</p>
								</td>
							</tr>	
						@endforeach
					</table>
				</div>	
				<div class="producers_fourth">
					<table class="producers_list producers_fourth">
						@foreach ($HELP::columnize($producers, 4, 4) as $producer)
							<tr>
								<td>
									<p class="admin_producer_one">
										{{$producer->producer}} 
										<i class="fa fa-pencil change_prod_icon"></i>
										<i class="fa fa-times delete_prod_icon"></i>
									</p>
								</td>
							</tr>	
						@endforeach
					</table>
				</div>	
			</div><!-- brands_column -->
		</div> <!-- groups  -->
		<a href="#" class="admin_uni_button">Сохранить</a>
	</div>
@stop
