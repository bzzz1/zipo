<?php

// MAIN CONTROLLER
Route::get('/', 'MainController@index');
Route::get('/about', 'MainController@about');
Route::get('/price', 'MainController@price');
Route::get('/get_price', 'MainController@get_price');
Route::get('/delivery', 'MainController@delivery');
Route::get('/specials', 'MainController@specials');
Route::get('/contacts', 'MainController@contacts');
Route::get('/articles', 'MainController@articles');
Route::get('/articles/{article_title}', 'MainController@article');
Route::get('/category/{category}', 'MainController@category');
Route::get('/producers/{producer_title}', 'MainController@byproducer');
Route::post('/user_login', 'MainController@user_login');
Route::get('/registration', 'MainController@registration_page');
Route::post('/registration', 'MainController@registration');
Route::post('/feedback', 'MainController@feedback');
Route::get('/order', 'MainController@order_page');
Route::post('/order', 'MainController@order');
Route::get('/search', 'MainController@search');
Route::post('/user_logout', 'MainController@user_logout');

/*------------------------------------------------
| PDF
------------------------------------------------*/
Route::get('/all_pdf', "PdfController@all_pdf");
Route::get('/all_pdf/{producer}', "PdfController@all_pdf_by_prod");
Route::get('/all_pdf/{producer}/{subcat}', "PdfController@all_pdf_by_cat");
Route::get('/one_pdf', "PdfController@one_pdf");

// Route::post('/delete_file_from_server', 'MainController@delete_file_from_server');

// ADMIN CONTROLLER
Route::get('/admin', 'AdminController@admin');
Route::post('/admin_login', 'AdminController@admin_login');
Route::group(['prefix'=>'/admin', 'before'=>'auth2'], function() {
	Route::post('/set_discount', 'AdminController@set_discount');
	Route::get('/search', 'AdminController@search');
	Route::post('/import', 'AdminController@import');
	Route::post('/admin_logout', 'AdminController@admin_logout');
	Route::get('/catalog', 'AdminController@catalog');
	Route::get('/producers/{producer_title}', 'AdminController@byproducer');

	// PDFS
	Route::get('/list_pdf', 'PdfController@list_pdf');
	Route::post('/delete_pdf', 'PdfController@delete_pdf');
	Route::get('/item_pdfs', 'PdfController@item_pdfs');
	Route::post('/import_pdf', 'PdfController@load_pdf');
	Route::post('/update_pdf', 'PdfController@update_pdf');

	// ARTICLE
	Route::get('/articles', 'AdminController@articles');
	Route::get('/change_article', 'AdminController@change_article');
	Route::post('/update_article', 'AdminController@update_article');
	Route::post('/delete_article', 'AdminController@delete_article');

	// SUBCAT
	Route::get('/subcats', 'AdminController@subcats');
	Route::post('/update_subcat', 'AdminController@update_subcat');
	Route::post('/delete_subcat', 'AdminController@delete_subcat');

	// PRODUCER
	Route::get('/producers', 'AdminController@producers');
	Route::post('/update_producer', 'AdminController@update_producer');
	Route::post('/delete_producer', 'AdminController@delete_producer');

	// AJAX
	Route::post('/ajax_change_subcat', 'AdminController@ajax_change_subcat');
	Route::post('/ajax_change_pdf', 'PdfController@ajax_change_pdf');
	Route::post('/ajax_set_special', 'AdminController@ajax_set_special');
	Route::post('/ajax_set_hit', 'AdminController@ajax_set_hit');
	Route::post('/ajax_set_procurement', 'AdminController@ajax_set_procurement');
	Route::post('/ajax_delete_group', 'AdminController@ajax_delete_group');
	Route::post('/ajax_get_subcats', 'AdminController@ajax_get_subcats');
	Route::post('/ajax_item_image', 'AdminController@ajax_item_image');
	
	// ITEM
	Route::get('/change_item', 'AdminController@change_item');
	Route::post('/update_item', 'AdminController@update_item');
	Route::post('/delete_item', 'AdminController@delete_item');
	Route::post('/delete_item_from_pdf', 'PdfController@delete_item_from_pdf');
	Route::get('/{category}/{subcat}', 'AdminController@items');
});

/*------------------------------------------------
| ARTISAN !!! DEVELOPMENT ONLY
------------------------------------------------*/
// Route::get('/migrate_install', function() {
// 	Artisan::call('migrate:install');
// });

// Route::get('/migrate', function() {
// 	Artisan::call('migrate', array('--force' => true));
// });
/*----------------------------------------------*/

Route::get('/{category}/{subcat}', 'MainController@prods_by_subcat');
Route::get('/{category}/{subcat}/{producer}/items', 'MainController@items_by_subcat_prod');
Route::get('/{category}/{subcat}/{item_title}', 'MainController@item');

Route::get('/test', function() {
	// $category = 'Механическое_en';

	// $producers = Producer::whereHas('pdf.subcat', function($q) use ($category){
	// 	$q->where('category', $category);
	// })->get();

	// dd($producers);
	/*------------------------------------------------
	| !!! whereHas()->with()
	------------------------------------------------*/
	// Producer::whereHas('pdf.subcat', function($q) {
 //        $q->groupBy('category');
 //    })->get();

 //    Producer::has('pdf.subcat')->get();
	#################################################

	// $result = Producer::has('pdf')->with('pdf.subcat')->groupBy('producer')->get()->flate()->flate();
	// $result = Producer::has('pdf')->with(['pdf.subcat' => function($q) {$q->select('pdf.good');}])->get();
	// Subcat::has('pdf')->with('pdf')->with('pdf.producer');

	// dd($result);

	// $input = [
	// 	'pdf_id' 	  => '7',
	// 	'producer_id' => '174',
	// 	'producer'	  => [
	// 	   'producer_id' => '174',
	// 	   'producer'    => 'RADA',
	// 	],
	// ];

	// function array_flat($arr) {
	// 	$output = [];
	// 	foreach($arr as $key => $val) {
	// 		if (is_array($val)) {
	// 			$output = array_merge($output, $val);
	// 		} else {
	// 			$output[$key] = $val;
	// 		}
	// 	}
	// 	return $output;
	// }

	// $output = array_flat($input);

	// dd($output);


	// Subcat::with('pdf.producer')->find(Input::get('subcat_id')),
	// Producer::with('pdf')->get()->filter(function($item) {if ($item->pdf != Null) {return $item;}})
	// Item::with(['producer' => function($query) {$query->select(['producer'])->get();}])->has('pdfs')->get()
	// Pdf::with(['producer' => function($query){ $query->select(['producer'])}]);

	// $pdfs = Pdf::with(['producer', 'subcat'])->get()->toArray();

	// foreach($pdfs as $key => $val) {
	// 	$pdfs[$key] = array_flat($val);
	// }

	// dd($pdfs);


	// $categories = [
	// 	'Механическое_en',
	// 	'Тепловое_en',
	// 	'Холодильное_en',
	// 	'Посудомоечное_en',
	// 	'Механическое_ru',
	// 	'Тепловое_ru',
	// 	'Холодильное_ru',
	// 	'Посудомоечное_ru'
	// ];

	// foreach ($categories as $category) {
	// 	$pdfs = Pdf::with(['producer', 'subcat'])->get()->flate();
	// 	$prods_by_cat[$category] = $pdfs->filter(function($pdf) use ($category) {
	// 		if ($pdf['category'] == $category) {
	// 			return new BaseCollection([$pdf['producer'], $pdf['producer_id']]);
	// 		}
	// 	});
	// }


	// dd($prods_by_cat);


	// Pdf::with(['producer' => function($query){ $query->select(['producer'])}, 
	//     'category' => function($query) { $query->select(['category'])}
	// ])->get();

	// $prods_by_cat = [];
	
	// foreach ($categories as $category) {
	// 	$group = Pdf::with('subcat', 'producer')->get()->map(function($pdf) use ($category) {
	// 		if ($pdf->subcat['category'] == $category) {
	// 			return $pdf->producer;
	// 		}
	// 	});

	// 	$prods_by_cat[$category] = $group->filter(function($item) {
	// 		if (isset($item)) {
	// 			return $item;
	// 		}
	// 	});
	// }


	// dd($prods_by_cat);

	// foreach ($categories as $category) {
	// 	$producers_by_category[] = Pdf::with('subcat', 'producer')->get()->map(function($pdf) use ($category) {
	// 		if ($pdf->subcat['category'] == $category) {
	// 			echo 'gggggggggg';
	// 			dd('ffffffffffffffff');
	// 			return $pdf->producer;
	// 		}
	// 	});
	// }

	// Pdf::with('subcat', 'producer')->get()->map(function($pdf) {
	// 				if ($pdf->subcat['category'] == 'Холодильное_en') {
	// 					return $pdf->producer;
	// 				}
	// 			});
	

	// list all producers that pdfs has group by category
	// +++  деталлирокки отсортированные по производителю и subcat_id
	// +++ на items if env == prods_by_subcat, передать producer в current
	// admin/list_pdf  admin_pdfs
});

// App::missing(function($exception) {
// 	return Redirect::to('/');
// });

// /*------------------------------------------------
// | SQL Listener or using debug bar
// ------------------------------------------------*/
// if (Config::get('database.log_sql')) {           
// 	Event::listen('illuminate.query', function($query, $bindings, $time, $name) {
// 		$data = compact('bindings', 'time', 'name');
// 		// Format binding data for sql insertion
// 		foreach ($bindings as $i => $binding) {
// 			if ($binding instanceof \DateTime) {
// 				$bindings[$i] = $binding->format('\'Y-m-d H:i:s\'');
// 			} else if (is_string($binding)) {
// 				$bindings[$i] = "'$binding'";
// 			}
// 		}
// 		// Insert bindings into query
// 		$query = str_replace(array('%', '?'), array('%%', '%s'), $query);
// 		$query = vsprintf($query, $bindings); 

// 		echo '<pre>';
// 		var_dump($query);
// 		echo '</pre>';
// 	});
// }
// /*----------------------------------------------*/