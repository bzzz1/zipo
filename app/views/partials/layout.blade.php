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
	{{ HTML::script('js/jquery.magnific-popup.min.js') }}
	{{ HTML::script('js/bootstrap.min.js') }}
	{{ HTML::script('js/betterContactForm.js') }}
	<!--[if IE]>
		{{ HTML::style('css/ie.css') }}
	<![endif]-->
	

	@yield('css')
	<script>
	      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	      ga('create', 'UA-60414778-1', 'auto');
	      ga('send', 'pageview');
	</script>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
	      (function (d, w, c) {
	          (w[c] = w[c] || []).push(function() {
	              try {
	                  w.yaCounter28860550 = new Ya.Metrika({id:28860550,
	                          webvisor:true,
	                          clickmap:true,
	                          trackLinks:true,
	                          accurateTrackBounce:true});
	              } catch(e) { }
	          });

	          var n = d.getElementsByTagName("script")[0],
	              s = d.createElement("script"),
	              f = function () { n.parentNode.insertBefore(s, n); };
	          s.type = "text/javascript";
	          s.async = true;
	          s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

	          if (w.opera == "[object Opera]") {
	              d.addEventListener("DOMContentLoaded", f, false);
	          } else { f(); }
	      })(document, window, "yandex_metrika_callbacks");
	</script>
	<noscript><div><img src="//mc.yandex.ru/watch/28860550" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
</head>
<body>
	@yield('header')
	<div class="container_main">
		@yield('left_sidebar')
		@yield('right_sidebar')
		@yield('body')
	</div>	
	@yield('footer')
	<a id="bcf_trigger" href="http://bettercontactform.com" rel="bcf_trigger">Contact Form</a>
	<div id="scrollup">
		<i class="fa fa-arrow-circle-up to_top_button fa-4x"></i>
	</div>

	{{ HTML::script('js/script.js') }}
	{{ HTML::script('js/common.js') }}
	@yield('js')
</body>
</html>