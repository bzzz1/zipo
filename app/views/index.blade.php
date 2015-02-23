@extends('layout')
@if ($env!=catalog_admin)
	@extends('header')
	@extends('footer')
	@extends('left_sidebar')
	@extends('right_sidebar')
@end	
@extends('index_only')