<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name='viewport' content='width=1200'>
	<meta name='keywords' content='Оборудование для баров, кафе, ресторанов, комплексное оснащение баров, ксобровождение баров, техника для баров, кафе ресторанов, техника для общепита, открытие ресторана Россия, техника для точек питания, запчасти для техники, запчасти для барного оборудования, запчасти для холодильного оборудования, запчасти для пекарского оборудования, запчасти для производственного оборудования, запчасти для кафе, холодильное оборудование, барное оборудование, пекарское оборудование, нейтральное оборудование, Санкт-Петербург, Россия'>
	<meta name='description' content='Комплексное оснащение баров, ресторанов,кафе, пищевых производств и магазинов.'>
	@yield('meta')
	<title>Зип Общепит - Комплексное оснащение баров, ресторанов, кафе, пищевых производств и магазинов</title>
	<link rel="shortcut icon" href="{{ asset('img/markup/favicon.ico') }}">
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/font-awesome.min.css') }}
	{{ HTML::style('css/style.css') }}
	{{ HTML::style('css/magnific-popup.css') }}
	{{ HTML::style('css/animate-popup.css') }}
	{{ HTML::script('js/jquery.min.js') }}
	{{ HTML::script('js/jquery.magnific-popup.js') }}

	@yield('css')
</head>
<body>
	@yield('header')
	<div class="container_main">
		@yield('left_sidebar')
		@yield('right_sidebar')
		@yield('body')
	</div>	
	@yield('footer')

	{{ HTML::script('js/jquery.columnizer.js') }}
	{{ HTML::script('js/script.js') }}
	{{ HTML::script('js/common.js') }}
	{{ HTML::script('js/bootstrap.min.js') }}
	@yield('js')
</body>
</html>