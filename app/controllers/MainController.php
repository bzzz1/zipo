<?php
class MainController extends BaseController {
	// USE of class vars
	// private static $prices_dir = public_path().DIRECTORY_SEPARATOR.'prices';

	private static function getPricesFromDir($dir) { 
		$result = array(); 

		if (!file_exists($dir)) {
			echo "<span style='color: red'>ERROR: no \"$dir\" directory found!</span></br>";
			return;
		}

		$cdir = scandir($dir); 
		foreach ($cdir as $key => $value) { 
			if (!in_array($value, array(".",".."))) { 
				if (is_dir($dir.DIRECTORY_SEPARATOR.$value)) { 
					$result[$value] = getPricesFromDir($dir.DIRECTORY_SEPARATOR.$value); 
					} 
				else { 
					// $result[] = App::make('HelperController')->url_slug($value);
					$result[] = mb_convert_encoding($value, 'UTF-8', 'Windows-1251');
				} 
			} 
		} 
		return $result; 
	}

	public function index() {
		return View::make('index')->with([
			'articles'	=> Article::readAllArticles(),
			'recents'	=> Recent::readAllRecents(),
			'user'		=> Auth::attempt() ? Auth::user() : [],
			'producers' => Producer::readAllProducers(),
			'subcats'   => Subcat::readAllSubcats(),
			'env' 		=> 'catalog'
		]);
	}

	public function about() {
		return View::make('about')->with([
			'articles'	=> Article::readAllArticles(),
			'recents'	=> Recent::readAllRecents(),
			'user'		=> Auth::attempt() ? Auth::user() : [],
			'producers' => Producer::readAllProducers(),
			'subcats'   => Subcat::readAllSubcats(),
			'env' 		=> 'about'
		]);
	}

	public function price() {
		$prices_dir = public_path().DIRECTORY_SEPARATOR.'prices';

		return View::make('price')->with([
			'prices'	=> static::getPricesFromDir($prices_dir),
			'articles'	=> Article::readAllArticles(),
			'recents'	=> Recent::readAllRecents(),
			'user'		=> Auth::attempt() ? Auth::user() : [],
			'producers' => Producer::readAllProducers(),
			'subcats'   => Subcat::readAllSubcats(),
			'env' 		=> 'price'
		]);
	}

	public function get_price() {
		$prices_dir = public_path().DIRECTORY_SEPARATOR.'prices';
		$prices = static::getPricesFromDir($prices_dir);
		$price_id = Input::get('price_id');

		header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header("Content-disposition: attachment; filename=$prices[$price_id]");
		/*------------------------------------------------
		| LARAVEL SELF LOAD
		------------------------------------------------*/
		// readfile($prices_dir.DIRECTORY_SEPARATOR."$prices[$price_id]");
	}

	public function delivery() {
		return View::make('delivery')->with([
			'articles'	=> Article::readAllArticles(),
			'recents'	=> Recent::readAllRecents(),
			'user'		=> Auth::attempt() ? Auth::user() : [],
			'producers' => Producer::readAllProducers(),
			'subcats'   => Subcat::readAllSubcats(),
			'env' 		=> 'delivery'
		]);
	}

	public function specials() {
		return View::make('items')->with([
			'items'     => [],
			'articles'	=> Article::readAllArticles(),
			'recents'	=> Recent::readAllRecents(),
			'user'		=> Auth::attempt() ? Auth::user() : [],
			'producers' => Producer::readAllProducers(),
			'subcats'   => Subcat::readAllSubcats(),
			'env' 		=> 'specials'
		]);
	}

	public function contacts() {
		return View::make('contacts')->with([
			'articles'	=> Article::readAllArticles(),
			'recents'	=> Recent::readAllRecents(),
			'user'		=> Auth::attempt() ? Auth::user() : [],
			'producers' => Producer::readAllProducers(),
			'subcats'   => Subcat::readAllSubcats(),
			'env' 		=> 'contacts'
		]);
	}

	public function category() {
		return View::make('one_category')->with([
			'items'     => Item::getItemsForCatalog(),
			'cur_subcat'=> Subcat::getCurrentSubcat(),
			'articles'	=> Article::readAllArticles(),
			'recents'	=> Recent::readAllRecents(),
			'user'		=> Auth::attempt() ? Auth::user() : [],
			'producers' => Producer::readAllProducers(),
			'subcats'   => Subcat::readAllSubcats(),
			'env' 		=> 'catalog'
		]);
	}

	public function items() {
		return View::make('items')->with([
			'items'     => Item::getItemsForCatalog(),
			'cur_subcat'=> Subcat::getCurrentSubcat(),
			'articles'	=> Article::readAllArticles(),
			'recents'	=> Recent::readAllRecents(),
			'user'		=> Auth::attempt() ? Auth::user() : [],
			'producers' => Producer::readAllProducers(),
			'subcats'   => Subcat::readAllSubcats(),
			'env' 		=> 'catalog'
		]);
	}

	public function item() {
		static::storeRecents();
	}

	public function articles() {
		return View::make('articles')->with([
			'articles'	=> Article::readAllArticles(),
			'recents'	=> Recent::readAllRecents(),
			'user'		=> Auth::attempt() ? Auth::user() : [],
			'producers' => Producer::readAllProducers(),
			'subcats'   => Subcat::readAllSubcats(),
			'env' 		=> ''
		]);
	}

	public function article() {
		return View::make('article')->with([
			'article'	=> Article::readArticleById(),
			'articles'	=> Article::readAllArticles(),
			'recents'	=> Recent::readAllRecents(),
			'user'		=> Auth::attempt() ? Auth::user() : [],
			'producers' => Producer::readAllProducers(),
			'subcats'   => Subcat::readAllSubcats(),
			'env' 		=> ''
		]);
	}

	public function byproducer() {
		
	}

	public function user_login() {
		
	}

	public function registration_page() {
		return View::make('registration')->with([
			'articles'	=> Article::readAllArticles(),
			'recents'	=> Recent::readAllRecents(),
			'user'		=> Auth::attempt() ? Auth::user() : [],
			'producers' => Producer::readAllProducers(),
			'subcats'   => Subcat::readAllSubcats(),
			'env'		=> ''
		]);
	}

	public function registration() {
		
	}

	public function feedback() {
		
	}

	public function order_page() {
		
	}

	public function order() {
		
	}

	public function search() {
		
	}

	public function logout() {
		
	}
	



// 	public function index($env='items') {
// 		($env === 'spares') ? $type = 'ЗИП' : $type = 'оборудование';
		
// 		return View::make('index')->with([
// 			'brands' 		=> Item::readBrands($type),
// 			'subcategories' => Item::readSubcategories($type),
// 			'env' 			=> $env
// 		]);
// 	}

// 	public function catalogSubcategory($env, $category, $subcategory) {
// 		($env === 'spares') ? $type = 'ЗИП' : $type = 'оборудование';
		
// 		return View::make('catalog')->with([
// 			'items' 		=> Item::readItemsBySubcategory($type, $category, $subcategory),
// 			'current' 		=> HTML::link("$env/$category/Всё", $category).' -> '.HTML::link("$env/$category/$subcategory", $subcategory),
// 			'env' 			=> $env
// 		]);
// 	}

// 	public function catalogCategory($env, $category) {
// 		($env === 'spares') ? $type = 'ЗИП' : $type = 'оборудование';
		
// 		return View::make('catalog')->with([
// 			'items' 		=> Item::readItemsByCategory($type, $category),
// 			'current' 		=> HTML::link("$env/$category/Всё", $category).' -> '.HTML::link("$env/$category/Всё", 'Всё'),
// 			'env' 			=> $env
// 		]);
// 	}

// 	public function catalogBrand($env, $brand) {
// 		($env === 'spares') ? $type = 'ЗИП' : $type = 'оборудование';
		
// 		return View::make('catalog')->with([
// 			'items' 		=> Item::readItemsByBrands($type, $brand),
// 			'current' 		=> HTML::link("$env/$brand", $brand),
// 			'env' 			=> $env
// 		]);
// 	}

// 	public function itemSearch() {
// 		$param = Input::get('param');

// 		return View::make('catalog')->with([
// 			'current' 		=> $param,
// 			'items' 		=> Item::readItemsBySearch($param),
// 			'env'			=> null
// 		]);
// 	}

// 	public function info() {
// 		return View::make('info')->with([
// 			'articles'  => Article::readArticles(),
// 			'env' 		=> 'info'
// 		]);	
// 	}

// 	public function attachment() {
// 		header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
// 		header('Content-disposition: attachment; filename=Komplexnoe_predl_s_1_12.xlsx');
// 		readfile(public_path().'/attachments/Komplexnoe_predl_s_1_12.xlsx');
// 	}
	
// /*------------------------------------------------
// | ADMIN AREA
// ------------------------------------------------*/
// 	public function login() {
// 		if (Auth::check()) {
// 			return View::make('admin/admin')->with([
// 				'element'	=> new Item
// 			]);
// 		} else {
// 			return View::make('admin/login');
// 		}
// 	}

// 	public function validate() {
// 		// dd(Hash::make('string'));
// 		// dd(hash('sha512', 'string'));

// 		// use $creds to escape where _token problem
// 		$creds = [
// 			'password'	=> Input::get('password'),
// 			'login' 	=> Input::get('login')
// 		];

// 		// if (Auth::validate($creds)) {
// 		// 	$admin = Member::where('login', $creds['login'])->first();
// 		// 	Auth::login($admin, true); 		// true to remember user not only for this page session
// 		// }

// 		Auth::attempt($creds);

// 		// with or without login, anyway redirect to /admin
// 		return Redirect::to('admin');
// 	}

// 	public function logout() {
// 		Auth::logout();
// 		return Redirect::to('admin');
// 	}

// 	public function adminInfo() {
// 		return View::make('admin/admin_info')->with([
// 			'articles' 		=> Article::readArticles()
// 		]);;
// 	}

// 	public function codeSearchAdmin() {
// 		$code = Input::get('code');
// 		// dd(Item::readItemByCode($code)->getCollection());

// 		return View::make('admin/admin_catalog')->with([
// 			'current' 		=> $code,
// 			'items' 		=> Item::readItemByCode($code),
// 			'element'		=> null
// 		]);
// 	}

// 	public function itemSearchAdmin() {
// 		$param = Input::get('param');

// 		return View::make('admin/admin_catalog')->with([
// 			'current' 		=> $param,
// 			'items' 		=> Item::readItemsBySearch($param),
// 			'element'		=> null
// 		]);
// 	}
// /*------------------------------------------------
// | ITEM
// ------------------------------------------------*/
// 	public function changeItem($code=null) {
// 		return View::make('admin/admin')->with([
// 			'current' 		=> null,
// 			'element'		=> $code ? Item::readElementByCode($code) : new Item
// 		]);
// 	}

// 	public function changeItemJson($code=null) {
// 		$data = $code ? Item::readElementByCode($code) : new Item;
// 		return Response::json($data);
// 	}

// 	public function updateOrCreateItem($code=null) {
// 		$validator = Validator::make(Input::all(), [
// 			'code'				=> ($code === null) ? 'required|unique:items' : 'required'
// 			// 'username'			=> 'required|min:3|unique:users',
// 			// 'password'			=> 'required|min:6',
// 			// 'password_again'		=> 'required|same:password'
// 		]);

// 		if ($validator->fails()) {
// 			return Redirect::back()->with('error_msg', 'Код должен быть уникальным!')->withInput();
// 		} else {
// 			$fields = Input::all();
// 			unset($fields['photo_name']); // clear unneeded fields from item

// 			if (Input::hasFile('photo')) {
// 				$file = Input::file('photo');
// 				$destinationPath = public_path().'/photos/';
// 				$filename = $file->getClientOriginalName();
// 				$fields['photo'] = $filename; // get photo name to store in db if has file
// 				$file->move($destinationPath, $filename);
// 			} else {
// 				if (Input::has('photo_name')) { // ensure this is not brand new item
// 					$fields['photo'] = Input::get('photo_name'); // if filename was from updating
// 				} else {
// 					unset($fields['photo']); // use default value from mysql if not $element->photo
// 				}
// 			}
			
// 			Item::updateOrCreateItemByCode($code, $fields);
// 			return Redirect::back()->with('msg', 'Изменения сохранены');
// 		}
// 	}

// 	public function deleteItem($code) {
// 		Item::deleteItemByCode($code);
// 		return Redirect::back()->with('msg', 'Товар #'.$code.' удален');
// 	}
// /*------------------------------------------------
// | ARTICLE
// ------------------------------------------------*/
// 	public function changeArticle($id=null) {
// 		return View::make('admin/admin_info_change')->with([
// 			'current' 		=> $id,
// 			'article'		=> $id ? Article::readArticleById($id) : new Article
// 		]);
// 	}

// 	public function updateOrCreateArticle($id=null) {
// 		$fields = Input::all();
// 		unset($fields['photo_name']); // clear unneeded fields from article

// 		if (Input::hasFile('image')) {
// 			$file = Input::file('image');
// 			$destinationPath = public_path('/photos/articles/');
// 			$filename = $file->getClientOriginalName();
// 			$fields['image'] = $filename; // get photo name to store in db if has file
// 			$file->move($destinationPath, $filename);
// 		} else {
// 			if (Input::has('photo_name')) { // ensure this is not brand new item
// 				$fields['image'] = Input::get('photo_name'); // if filename was from updating
// 			} else {
// 				unset($fields['image']); // use default value from mysql if not $article->image
// 			}
// 		}

// 		Article::updateOrCreateArticleById($id, $fields);
// 		return Redirect::to('admin/info');
// 	}

// 	public function deleteArticle($id) {
// 		Article::deleteArticleById($id);
// 		return Redirect::to('admin/info');	
// 	}
}