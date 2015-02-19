@extends('layout')
@extends('admin/admin_header')
@extends('footer')

@section('body')
	<p>THIS IS ADMIN PANEl</p>
	{{ HTML::link('/admin/admin_logout', 'Выйти', ['class' => 'btn btn-default btn_exit']) }}
@stop