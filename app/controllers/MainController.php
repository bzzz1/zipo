<?php
class MainController extends BaseController {

	public function index() {
		return View::make('index')->with([
			// 'brands' 		=> Item::readBrands($type),
			// 'subcategories' => Item::readSubcategories($type),
			'env' 			=> 'catalog'
		]);
	}
	public function about() {
		
	}

	public function price() {
		
	}

	public function delivery() {
		
	}

	public function specials() {
		
	}

	public function contacts() {
		
	}

	public function category() {
		
	}

	public function items() {
		
	}

	public function item() {
		
	}

	public function news() {
		
	}

	public function byproducer() {
		
	}

	public function user_login() {
		
	}

	public function registration_page() {
		
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

// /*------------------------------------------------
// | URL SLUG https://gist.github.com/sgmurphy/3098978
// ------------------------------------------------
// 	function url_slug($str, $options = array()) {
// 		// Make sure string is in UTF-8 and strip invalid UTF-8 characters
// 		$str = mb_convert_encoding((string)$str, 'UTF-8', mb_list_encodings());
		
// 		$defaults = array(
// 			'delimiter' => '-',
// 			'limit' => null,
// 			'lowercase' => true,
// 			'replacements' => array(),
// 			'transliterate' => false,
// 		);
		
// 		// Merge options
// 		$options = array_merge($defaults, $options);
		
// 		$char_map = array(
// 			// Latin
// 			'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'AE', 'Ç' => 'C', 
// 			'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I', 
// 			'Ð' => 'D', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ő' => 'O', 
// 			'Ø' => 'O', 'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ű' => 'U', 'Ý' => 'Y', 'Þ' => 'TH', 
// 			'ß' => 'ss', 
// 			'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'ae', 'ç' => 'c', 
// 			'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 
// 			'ð' => 'd', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'o', 'ő' => 'o', 
// 			'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ü' => 'u', 'ű' => 'u', 'ý' => 'y', 'þ' => 'th', 
// 			'ÿ' => 'y',

// 			// Latin symbols
// 			'©' => '(c)',

// 			// Greek
// 			'Α' => 'A', 'Β' => 'B', 'Γ' => 'G', 'Δ' => 'D', 'Ε' => 'E', 'Ζ' => 'Z', 'Η' => 'H', 'Θ' => '8',
// 			'Ι' => 'I', 'Κ' => 'K', 'Λ' => 'L', 'Μ' => 'M', 'Ν' => 'N', 'Ξ' => '3', 'Ο' => 'O', 'Π' => 'P',
// 			'Ρ' => 'R', 'Σ' => 'S', 'Τ' => 'T', 'Υ' => 'Y', 'Φ' => 'F', 'Χ' => 'X', 'Ψ' => 'PS', 'Ω' => 'W',
// 			'Ά' => 'A', 'Έ' => 'E', 'Ί' => 'I', 'Ό' => 'O', 'Ύ' => 'Y', 'Ή' => 'H', 'Ώ' => 'W', 'Ϊ' => 'I',
// 			'Ϋ' => 'Y',
// 			'α' => 'a', 'β' => 'b', 'γ' => 'g', 'δ' => 'd', 'ε' => 'e', 'ζ' => 'z', 'η' => 'h', 'θ' => '8',
// 			'ι' => 'i', 'κ' => 'k', 'λ' => 'l', 'μ' => 'm', 'ν' => 'n', 'ξ' => '3', 'ο' => 'o', 'π' => 'p',
// 			'ρ' => 'r', 'σ' => 's', 'τ' => 't', 'υ' => 'y', 'φ' => 'f', 'χ' => 'x', 'ψ' => 'ps', 'ω' => 'w',
// 			'ά' => 'a', 'έ' => 'e', 'ί' => 'i', 'ό' => 'o', 'ύ' => 'y', 'ή' => 'h', 'ώ' => 'w', 'ς' => 's',
// 			'ϊ' => 'i', 'ΰ' => 'y', 'ϋ' => 'y', 'ΐ' => 'i',

// 			// Turkish
// 			'Ş' => 'S', 'İ' => 'I', 'Ç' => 'C', 'Ü' => 'U', 'Ö' => 'O', 'Ğ' => 'G',
// 			'ş' => 's', 'ı' => 'i', 'ç' => 'c', 'ü' => 'u', 'ö' => 'o', 'ğ' => 'g', 

// 			// Russian
// 			'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'Yo', 'Ж' => 'Zh',
// 			'З' => 'Z', 'И' => 'I', 'Й' => 'J', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O',
// 			'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C',
// 			'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sh', 'Ъ' => '', 'Ы' => 'Y', 'Ь' => '', 'Э' => 'E', 'Ю' => 'Yu',
// 			'Я' => 'Ya',
// 			'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh',
// 			'з' => 'z', 'и' => 'i', 'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o',
// 			'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c',
// 			'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sh', 'ъ' => '', 'ы' => 'y', 'ь' => '', 'э' => 'e', 'ю' => 'yu',
// 			'я' => 'ya',

// 			// Ukrainian
// 			'Є' => 'Ye', 'І' => 'I', 'Ї' => 'Yi', 'Ґ' => 'G',
// 			'є' => 'ye', 'і' => 'i', 'ї' => 'yi', 'ґ' => 'g',

// 			// Czech
// 			'Č' => 'C', 'Ď' => 'D', 'Ě' => 'E', 'Ň' => 'N', 'Ř' => 'R', 'Š' => 'S', 'Ť' => 'T', 'Ů' => 'U', 
// 			'Ž' => 'Z', 
// 			'č' => 'c', 'ď' => 'd', 'ě' => 'e', 'ň' => 'n', 'ř' => 'r', 'š' => 's', 'ť' => 't', 'ů' => 'u',
// 			'ž' => 'z', 

// 			// Polish
// 			'Ą' => 'A', 'Ć' => 'C', 'Ę' => 'e', 'Ł' => 'L', 'Ń' => 'N', 'Ó' => 'o', 'Ś' => 'S', 'Ź' => 'Z', 
// 			'Ż' => 'Z', 
// 			'ą' => 'a', 'ć' => 'c', 'ę' => 'e', 'ł' => 'l', 'ń' => 'n', 'ó' => 'o', 'ś' => 's', 'ź' => 'z',
// 			'ż' => 'z',

// 			// Latvian
// 			'Ā' => 'A', 'Č' => 'C', 'Ē' => 'E', 'Ģ' => 'G', 'Ī' => 'i', 'Ķ' => 'k', 'Ļ' => 'L', 'Ņ' => 'N', 
// 			'Š' => 'S', 'Ū' => 'u', 'Ž' => 'Z',
// 			'ā' => 'a', 'č' => 'c', 'ē' => 'e', 'ģ' => 'g', 'ī' => 'i', 'ķ' => 'k', 'ļ' => 'l', 'ņ' => 'n',
// 			'š' => 's', 'ū' => 'u', 'ž' => 'z'
// 		);
		
// 		// Make custom replacements
// 		$str = preg_replace(array_keys($options['replacements']), $options['replacements'], $str);
		
// 		// Transliterate characters to ASCII
// 		if ($options['transliterate']) {
// 			$str = str_replace(array_keys($char_map), $char_map, $str);
// 		}
		
// 		// Replace non-alphanumeric characters with our delimiter
// 		$str = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str);
		
// 		// Remove duplicate delimiters
// 		$str = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', $str);
		
// 		// Truncate slug to max. characters
// 		$str = mb_substr($str, 0, ($options['limit'] ? $options['limit'] : mb_strlen($str, 'UTF-8')), 'UTF-8');
		
// 		// Remove delimiter from ends
// 		$str = trim($str, $options['delimiter']);
		
// 		return $options['lowercase'] ? mb_strtolower($str, 'UTF-8') : $str;
// 	}

// /*------------------------------------------------
// | URL SLUG USAGE
// ------------------------------------------------*/
// 	include('url_slug.php');
// 	header('Content-type: text/plain; charset=utf-8');

// 	// Basic usage
// 	echo "This is an example string. Nothing fancy." . "\n";
// 	echo url_slug("This is an example string. Nothing fancy.") . "\n\n";

// 	// Example using French with unwanted characters ('?)
// 	echo "Qu'en est-il français? Ça marche alors?" . "\n";
// 	echo url_slug("Qu'en est-il français? Ça marche alors?") . "\n\n";

// 	// Example using transliteration
// 	echo "Что делать, если я не хочу, UTF-8?" . "\n";
// 	echo url_slug("Что делать, если я не хочу, UTF-8?", array('transliterate' => true)) . "\n\n";

// 	// Example using transliteration on an unsupported language
// 	echo "מה אם אני לא רוצה UTF-8 תווים?" . "\n";
// 	echo url_slug("מה אם אני לא רוצה UTF-8 תווים?", array('transliterate' => true)) . "\n\n";

// 	// Some other options
// 	echo "This is an Example String. What's Going to Happen to Me?" . "\n";
// 	echo url_slug(
// 		"This is an Example String. What's Going to Happen to Me?", 
// 		array(
// 			'delimiter' => '_',
// 			'limit' => 40,
// 			'lowercase' => false,
// 			'replacements' => array(
// 				'/\b(an)\b/i' => 'a',
// 				'/\b(example)\b/i' => 'Test'
// 			)
// 		)
// 	);

// 	/*
// 	Output:

// 	This is an example string. Nothing fancy.
// 	this-is-an-example-string-nothing-fancy

// 	Qu'en est-il français? Ça marche alors?
// 	qu-en-est-il-français-ça-marche-alors

// 	Что делать, если я не хочу, UTF-8?
// 	chto-delat-esli-ya-ne-hochu-utf-8

// 	מה אם אני לא רוצה UTF-8 תווים?
// 	מה-אם-אני-לא-רוצה-utf-8-תווים

// 	This is an Example String. What's Going to Happen to Me?
// 	This_is_a_Test_String_What_s_Going_to_Ha
// 	*/
// /*----------------------------------------------*/	



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