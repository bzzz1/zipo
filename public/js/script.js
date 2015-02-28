/*------------------------------------------------
| Store and retrieve PAGES_BY param
------------------------------------------------*/
if (localStorage['pages_by'] != 'undefined') {
	var pages_by = localStorage['pages_by'];
	var $options = $('#pages_by option');
	$options.each(function(index) {
		if ($(this).val() == pages_by) {
			$(this).attr("selected", "selected");
		} 
	});
} else {
	var $option = $('#pages_by').find('option:selected');
	var pages_by = $option.val();
	localStorage['pages_by'] = pages_by;
}

$('#pages_by').on('change', function() {
	var $option = $(this).find('option:selected');
	var pages_by = $option.val();				
	localStorage['pages_by'] = pages_by;
	var link = $option.data('link');
	window.location = link;
});


// FIXED SIDEBARS
$(window).load(function() {
	var $window = $(window);
	var $left_sidebar = $('.left_sidebar');
	var $right_sidebar = $('.right_sidebar');

	var offset_top = $left_sidebar.offset().top;
	var $body = $('body');
	var page_height = $body.height();
	var sidebar_height = $left_sidebar.height();
	//was 80
	var max = page_height - sidebar_height - 121;
	$window.on('scroll', function() { 
		var scroll = $window.scrollTop();
		// was max-342 +30
		if (scroll > offset_top && scroll < max-42) {
			$left_sidebar.clearQueue().animate({
				'margin-top' : scroll-offset_top + 10
			});
			$right_sidebar.clearQueue().animate({
				'margin-top' : scroll-offset_top + 10
			});
		} else if (scroll < offset_top) {
			$left_sidebar.clearQueue().animate({
				'margin-top' : '0px'
			});
			$right_sidebar.clearQueue().animate({
				'margin-top' : '0px'
			});
		} else if (scroll > max-342) {
			$left_sidebar.clearQueue().animate({
				'margin-top' : max-342+'px'
			});
			$right_sidebar.clearQueue().animate({
				'margin-top' : max-342+'px'
			});
		}
	});	
});	

$('.close_message').click(function() {
	$('.message').css('display','none')
});