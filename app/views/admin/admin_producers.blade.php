@extends('layout')
@extends('admin/admin_header')
@extends('admin/admin_sidebar')
@extends('admin/admin_footer')

@section('body')
	<h1 class="admin_uni_heading">Производители</h1>
	<div class="admin_main_content">
		<a href="#" class="admin_producer_add"><i class="fa fa-plus"></i>&nbsp Добавить производителя</a>
		<div class = "groups">
			<div class="brands_column">
				<?php 
					$producers = $producers->all();
					$count = count($producers);
					$rest = $count % 3;
					$end = ($count - $rest)/3;

					switch ($rest) {
					    case 0:
							$first = $end;
							$second = $end;
							break;
					    case 1:
							$first = $end + 1;
							$second = $end;
							break;
					    case 2:
							$first = $end + 1;
							$second = $end + 1;
							break;
					}
				?>
				<div class="producers_first">
					<table class="producers_list producers_first">
						@foreach (array_slice($producers, 0, $first) as $producer)
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
						@foreach (array_slice($producers, $first, $second) as $producer)
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
						@foreach (array_slice($producers, $first+$second, $end) as $producer)
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
						@foreach (array_slice($producers, $first+$second, $end) as $producer)
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
