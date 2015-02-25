<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name='viewport' content='width=1200'>
	<meta name='keywords' content='Оборудование для баров, кафе, ресторанов, комплексное оснащение баров, ксобровождение баров, техника для баров, кафе ресторанов, техника для общепита, открытие ресторана Россия, техника для точек питания, запчасти для техники, запчасти для барного оборудования, запчасти для холодильного оборудования, запчасти для пекарского оборудования, запчасти для производственного оборудования, запчасти для кафе, холодильное оборудование, барное оборудование, пекарское оборудование, нейтральное оборудование, Санкт-Петербург, Россия'>
	<meta name='description' content='Комплексное оснащение баров, ресторанов,кафе, пищевых производств и магазинов.'>
	@yield('meta')
	<title>Зип Общепит - Комплексное оснащение баров, ресторанов, кафе, пищевых производств и магазинов</title>
	<link rel="shortcut icon" href="{{ asset('icons/favicon.ico') }}">
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/font-awesome.min.css') }}
	{{ HTML::style('css/style.css') }}
	{{ HTML::style('css/left_sidebar.css') }}<!--delete it-->
	{{ HTML::style('css/right_sidebar.css') }}<!--delete it-->
	{{ HTML::style('css/footer.css') }}<!--delete it-->
	{{ HTML::style('css/item.css') }}<!--delete it-->
	{{ HTML::style('css/article.css') }}<!--delete it-->
	{{ HTML::style('css/articles.css') }}<!--delete it-->
	{{ HTML::style('css/admin.css') }}
	{{-- HTML::script('js/angular.min.js') --}}
	{{ HTML::script('js/jquery.min.js') }}
	{{ HTML::script('ckeditor/ckeditor.js') }}

	{{-- SETTING GLOBAL VARS --}}
	<script>
		var AJAX_GET_SUBCATS = "{{ URL::to('/admin/ajax_get_subcats') }}";
	</script>

	{{-- HTML::script('js/jquery.sticky-kit.min.js') --}}
	{{-- HTML::script('js/jquery.sticky.min.js') --}}
	{{-- HTML::script('js/jquery.sticky-sidebar-scroll.min.js') --}}
	{{-- HTML::script('js/bootstrap.min.js') --}}

	@yield('css')
	<!--[if lt IE 10]>
		<!!!!!!!!!!!!!!!script src="{{ asset('js/modernizr_columns.js') }}"></script>
	<![endif]-->
</head>

<body>
	@yield('header')
	@yield('left_sidebar')
	<div class="container_main">
		@yield('right_sidebar')
		@yield('body')
	</div>	
	@yield('footer')

	{{ HTML::script('js/jquery.columnizer.js') }}
	{{ HTML::script('js/common.js') }}
	{{ HTML::script('js/admin.js') }}
	{{ HTML::script('js/bootstrap.min.js') }}
	@yield('js')
</body>
</html>