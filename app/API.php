<?php 

private function overall() {
// <-$user_id from cookie
// ->$subcats = [
// 	'foreign'  => [
// 		'category1' => [],
// 		'category2' => [],
// 		'category3' => [],
// 		'category4' => []
// 	],
// 	'domestic' => [
// 		'category1' => [],
// 		'category2' => [],
// 		'category3' => [],
// 		'category4' => []
// 	]
// ]
// ->$recents = [4*Recent]
// ->$user = User
// ->$news = [n*New]
// ->$message = 'error'
}

Route::get('/', 'MainController@index');
// view(index)
// ->$producers = [n*Producer]
// ->$env = 'catalog'
// ->$current breadcrumbs
// overall()

Route::get('/about', 'MainController@about');
// view(about)
// ->$env = 'about'
// overall()

Route::get('/price', 'MainController@price');
// view(price)
// ->$prices = [5*'excel_file_name']
// ->$env = 'price'
// overall()

Route::get('/delivery', 'MainController@delivery');
// view(delivery)
// ->$env = 'delivery'
// overall()

Route::get('/specials', 'MainController@specials');
// view(specials)
// ->$spec_items = [n*Item]
// ->$env = 'specials'
// overall()

Route::get('/contacts', 'MainController@contacts');
// view(contacts)
// ->$env = 'contacts'
// overall() fill form with User creds

Route::get('/{category}', 'MainController@category');
// view(one_category)
// <-$category
// ->$env = 'catalog'
// ->$current breadcrumbs
// overall()

Route::get('/{category}/{subcat}', 'MainController@items');
// view(items)
// <-$category
// <-$subcat
// ->$env = 'catalog'
// ->$current breadcrumbs
// ->$items = [n*Item] sort by hit and Input::get('sort');  Input::get('order'); paginate by Input::get('by');
// overall()

Route::get('/{category}/{subcat}/{item_title}?item_code={code}', 'MainController@item');
// view(item)
// <-$category
// <-$subcat
// <-$item_title
// <-$item_code = Input::get('code'); // second arg is default
// add item_code to recent table by user_id
// ->$env = 'catalog'
// ->$current breadcrumbs
// ->$item = Item by item_code
// ->$same = [4*Item] from same subcategory
// overall()

Route::get('/news', 'MainController@news');
// view(news)
// overall() with all news

Route::get('/news/{new_title}', 'MainController@new');
// view(new)
// <-$new_title
// ->$new by new_title
// overall()

Route::get('/producers/{producer_title}', 'MainController@byproducer');
// view(items)
// <-$producer_title
// ->$items = [n*Item] by producer_title sort by hit and Input::get('sort');  Input::get('order'); paginate by Input::get('by');
// overall()

Route::post('/user_login', 'MainController@user_login');
// <-$creds from user_login_form
// redirect('/') with message on error

Route::get('/registration', 'MainController@registration_page');
// view(registration)

Route::post('/registration', 'MainController@registration') 
// <-$regs from registration_form
// redirect('/') with congratulation message
// redirect('/registration') with message on error

Route::post('/feedback', 'MainController@feedback');
// <-$feed from feedback_form
// redirect('/contacts') with thanks message

Route::get('/order/{item_title}/{item_code}', 'MainController@order_page');
// view(order)
// <-$item_title
// <-$item_code
// overall() fill form with User creds, item_title and item_code

Route::post('/order', 'MainController@order');
// <-$order from order_form
// redirect('') with thanks message

Route::get('/search/{query}', 'MainController@search');
// view(items)
// <-$query
// ->$items = [n*Item] search by title, description, code sort by hit and Input::get('sort');  Input::get('order'); paginate by Input::get('by');
// overall()

Route::get('/logout', 'MainController@logout');
// redirect('/')