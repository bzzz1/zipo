@extends('partials/admin_layout')
@extends('partials/admin_header')
@extends('partials/admin_sidebar')
@extends('partials/admin_footer')
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
										<a href="/admin/change_producer?producer_id={{$producer->producer_id}}"><i class="fa fa-pencil change_icon"></i></a>
										{{ Form::open(array('url' => "/admin/delete_producer", 'method' => 'POST', 'class'=>'')) }}
											<i class="fa fa-times delete_icon"></i>
											{{ Form::submit('Сохранить', ['class'=>'hidden']) }}
										{{ Form::close() }}
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
										<a href="/admin/change_producer?producer_id={{$producer->producer_id}}"><i class="fa fa-pencil change_icon"></i></a>
										{{ Form::open(array('url' => "/admin/delete_producer", 'method' => 'POST', 'class'=>'')) }}
											<i class="fa fa-times delete_icon"></i>
											{{ Form::submit('Сохранить', ['class'=>'hidden']) }}
										{{ Form::close() }}
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
										<a href="/admin/change_producer?producer_id={{$producer->producer_id}}"><i class="fa fa-pencil change_icon"></i></a>
										{{ Form::open(array('url' => "/admin/delete_producer", 'method' => 'POST', 'class'=>'')) }}
											<i class="fa fa-times delete_icon"></i>
											{{ Form::submit('Сохранить', ['class'=>'hidden']) }}
										{{ Form::close() }}
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
										<a href="/admin/change_producer?producer_id={{$producer->producer_id}}"><i class="fa fa-pencil change_icon"></i></a>
										{{ Form::open(array('url' => "/admin/delete_producer", 'method' => 'POST', 'class'=>'')) }}
											<i class="fa fa-times delete_icon"></i>
											{{ Form::submit('Сохранить', ['class'=>'hidden']) }}
										{{ Form::close() }}
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
