 @extends('partials/admin_layout')
@extends('partials/admin_header')
@extends('partials/admin_sidebar')
@extends('partials/admin_footer')

@section('body')
	<div class="admin_main_content">
		<ul class="all_pdfs">
			@foreach ($pdfs as $pdf)
				<li>
					{{ Form::open(array('url' => "/admin/delete_pdf?pdf_id=$pdf->pdf_id", 'method' => 'POST', 'class'=>'admin_del_pdf_form ')) }}
						<i class="fa fa-times del_pdf"></i>
						{{ Form::submit('Сохранить', ['class'=>'hidden']) }}
					{{ Form::close() }} 
					{{HTML::link("admin/item_pdfs", $pdf->good,['target'=>'_blank']) }}
				</li>
			@endforeach		
		</ul>
	</div>
@stop