/*------------------------------------------------
	| SUBCATEGORIES
	------------------------------------------------*/
	$subcategories = $('.subcategory_block');
	$categories = $('.catalog_category');
	HIDING = false;


	$categories.on('click', function() {
		var clicked_category_data = $(this).data('category');
		var $clicked_subcategory = $subcategories.filter(function(index) {
			return $(this).data('category') === clicked_category_data;
		});

		// DETECT IF IT NEEDS HIDING DELAY
		$.each($subcategories, function(index, value) {
			if ($(this).css('display') != 'none') {
				HIDING = true;
			}
		});

		// HIDE ALL ANYWAY
		$subcategories.clearQueue().slideUp();

		// SLIDE DOWN ONLY IF CLIKED WASN'T SHOWN ALREADY
		if ($clicked_subcategory.css('display') == 'none') {
			if (HIDING) {
				$clicked_subcategory.clearQueue().delay(400).slideDown();
			} else {
				$clicked_subcategory.clearQueue().slideDown();						
			}
		}

		HIDING = false;						
	});

