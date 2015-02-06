<?php

Route::get('/', 'MainController@index');
Route::get('/about', 'MainController@about');
Route::get('/price', 'MainController@price');
Route::get('/delivery', 'MainController@delivery');
Route::get('/specials', 'MainController@specials');
Route::get('/contacts', 'MainController@contacts');
Route::get('/{category}', 'MainController@category');
Route::get('/{category}/{subcat}', 'MainController@items');
Route::get('/{category}/{subcat}/{item_title}?item_code={code}', 'MainController@item');
Route::get('/news', 'MainController@news');
Route::get('/news/{new_title}', 'MainController@new');
Route::get('/producers/{producer_title}', 'MainController@byproducer');
Route::post('/user_login', 'MainController@user_login');
Route::get('/registration', 'MainController@registration_page');
Route::post('/registration', 'MainController@registration') 
Route::post('/feedback', 'MainController@feedback');
Route::get('/order/{item_title}/{item_code}', 'MainController@order_page');
Route::post('/order', 'MainController@order');
Route::get('/search/{query}', 'MainController@search');
Route::get('/logout', 'MainController@logout');


Route::get('/admin', 'AdminController@admin');
Route::post('/login', 'AdminController@login');
Route::group(['prefix'=>'/admin', 'before'=>'auth2'], function() {
	Route::get('/catalog', 'AdminController@catalog');
	Route::get('/news', 'AdminController@news');
	Route::post('/import', 'AdminController@import');
	Route::post('/set_discount', 'AdminController@set_discount');
	Route::get('/search/{query}', 'AdminController@search');
	Route::get('/items', 'AdminController@items');
	Route::get('/news/{new_id}', 'AdminController@new');
	Route::get('/change_item/{item_id}', 'AdminController@change_item');
	Route::post('/update_item', 'AdminController@update');
	Route::get('/change_new/{new_id}', 'AdminController@change_new');
	Route::post('/update_new', 'AdminController@update_new');
	Route::post('/subcategories', 'AdminController@subcategories');
	Route::post('/delete_item/{item_code}', 'AdminController@delete_item');
	Route::post('/delete_new/{new_id}', 'AdminController@delete_new');
	Route::post('/delete_subcat/{subcat_id}', 'AdminController@delete_subcat');
	Route::post('/delete_producer/{producer_id}', 'AdminController@delete_producer');
	Route::post('/change_subcat', 'AdminController@change_subcat');
	Route::post('/change_producer', 'AdminController@change_producer');
	Route::post('/ajax_change_subcat', 'AdminController@ajax_change_subcat');
	Route::post('/ajax_set_special', 'AdminController@ajax_set_special');
	Route::post('/ajax_set_hit', 'AdminController@ajax_set_hit');
	Route::post('/ajax_delete', 'AdminController@ajax_delete');
	Route::post('/ajax_set_procurement', 'AdminController@ajax_set_procurement');
});

App::missing(function($exception) {
	return Redirect::to('/');
});

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



// Route::get('/', 'MainController@index');
// Route::get('/info', 'MainController@info');
// Route::get('/itemSearch', ['as'=>'itemSearch', 'uses'=>'MainController@itemSearch']);
// Route::get('/admin', 'MainController@login');
// Route::post('/validate', 'MainController@validate');
// Route::get('/attachment', 'MainController@attachment');
// Route::get('/excel_import', 'ExcelController@excelImport'); // items and spares
// Route::get('/{env}', 'MainController@index'); // items and spares

// Route::group(['prefix'=>'/admin', 'before'=>'auth2'], function() {
// 	Route::get('/logout', 'MainController@logout');
// 	Route::get('/info', 'MainController@adminInfo');
// 	Route::get('/codeSearch', ['as'=>'codeSearchAdmin', 'uses'=>'MainController@codeSearchAdmin']);
// 	Route::get('/itemSearch', ['as'=>'itemSearchAdmin', 'uses'=>'MainController@itemSearchAdmin']);

// 	/*------------------------------------------------
// 	| ITEM
// 	------------------------------------------------*/
// 	// Route::post('/createItem', 'MainController@createItem');
// 	Route::get('/changeItem/{code?}', 'MainController@changeItem');
// 	Route::post('/changeItem/{code?}', 'MainController@changeItemJson');
// 	Route::post('/updateItem/{code?}', 'MainController@updateOrCreateItem');
// 	Route::post('/deleteItem/{code}', 'MainController@deleteItem');
// 	/*------------------------------------------------
// 	| ARTICLE
// 	------------------------------------------------*/
// 	// Route::post('/info/createArticle', 'MainController@createArticle');
// 	Route::get('/info/changeArticle/{id?}', 'MainController@changeArticle');
// 	Route::post('/info/updateArticle/{id?}', 'MainController@updateOrCreateArticle');
// 	Route::post('/info/deleteArticle/{id}', 'MainController@deleteArticle');
// });

// Route::get('/{env}/{brand}', 'MainController@catalogBrand');
// Route::get('/{env}/{category}/Всё', 'MainController@catalogCategory');
// Route::get('/{env}/{category}/{subcategory}', 'MainController@catalogSubcategory');