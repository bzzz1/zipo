<?php
class AdminController extends BaseController {
	public function admin() {
		if (Auth::admin()->check()) {
			return View::make('admin/admin')->with([
				'env' 		=> 'panel',
				'discount'  => Cred::getDiscount()
			]);
		} else {
			return View::make('admin/admin_login');
		}
	}

	public function admin_login() {
		$creds = [
			'password'	=> Input::get('password'),
			'login' 	=> Input::get('login')
		];

		Auth::admin()->attempt($creds, true);
		return Redirect::to('admin');
	}

	public function set_discount() {
		$discount = Input::get('discount');
		Cred::setDiscount();

		return Redirect::to('/admin')->with('message', 'Скидка для зарегестрированных пользователей: '.$discount.'%.');
	}

	public function search() {
		return View::make('admin/admin_items')->with([
			'items'     => Item::getItemsByQuery(),
			'current'	=> Input::get('query'),
			'env' 		=> 'catalog_admin'
		]);
	}

	public function import() {
		if (Input::hasFile('excel')) {
			$file = Input::file('excel');
			$destinationPath = Help::$EXCEL_IMPORT_DIR;
			$extension = $file->getClientOriginalExtension();
			// $filename = $file->getClientOriginalName(); // full
			$filename = 'excel.'.$extension;
			$file->move($destinationPath, $filename);
		}

		$count = 10;
		return Redirect::to('/admin')->with('message', 'Импорт завершен успешно, добавлено '.$count.' товаров.');
	}

	public function admin_logout() {
		Auth::admin()->logout();
		return Redirect::to('/');
	}

	public function catalog() {
		return View::make('admin/admin_catalog')->with([
			'env' 		=> 'catalog_admin',
			'subcats'   => Subcat::readAllSubcats(),
			'producers' => Producer::readAllProducers(),
		]);
	}

	public function items() {
		return View::make('admin/admin_items')->with([
			'env' 		=> 'catalog_admin',
			'items'     => Item::getItemsForCatalog()
		]);
	}

	public function change_item() {
		return View::make('admin/admin_change_item')->with([
			'env' 		=> 'change_item',
			'item'		=> Item::__items()->find(Input::get('item_id')), // or use Model::findOrFail(1); if need to show delete button everywere
			'producers' => Producer::readAllProducers()
		]);
	}

	public function update_item() {
		$item_id = Input::get('item_id');
		$fields = Input::all();
		$photo = Input::get('photo');
		$rules = [
			'code'	=> 'required|unique:items,code,'.$item_id.',item_id'
		];

		if ($photo) {
			$old = Help::$ITEM_PHOTO_DIR.DIRECTORY_SEPARATOR.$photo;
			$extension = File::extension($old);
			$filename = 'photo_'.time().'.'.$extension;
			$new = Help::$ITEM_PHOTO_DIR.DIRECTORY_SEPARATOR.$filename;
			rename($old, $new);
			$fields['photo'] = $filename;
		} else {
			$fields['photo'] = 'no_photo.png';
		}

		$validator = Validator::make($fields, $rules);

		if ($validator->fails()) {
			return Redirect::back()->withInput()
				->withErrors('Товар с таким кодом уже существует. Код должен быть уникальным!');
		} else {
			$item = Item::updateOrCreate(['item_id' => $item_id], $fields);
		}

		if ($item_id) { 
			return Redirect::back()->with('message', 'Товар '.$item->title.' изменен');
		} else {
			return Redirect::back()->with('message', 'Товар '.$item->title.' добавлен');
		}
	}

	public function delete_item() {
		return Help::__delete('Item', 'Товар %s удален', 'title');
	}

	public function articles() {
		return View::make('admin/admin_articles')->with([
			'env' 		=> 'articles',
			'articles'	=> Article::readAllArticles(),
		]);
	}

	public function change_article() {
		return View::make('admin/admin_change_article')->with([
			'env' 		=> 'change_article',
			'article'	=> Article::find(Input::get('article_id'))
		]);
	}

	public function update_article() {
		// $filename = 'article_'.time();
		// UPDATE
	}

	public function delete_article() {
		die('prevent deleting!');
		return Help::__delete('Article', 'Новость %s удалена', 'title');
	}

	public function subcats() {
		return View::make('admin/admin_subcats')->with([
			'env' 		=> 'subcats',
			'subcats'   => Subcat::readAllSubcats(),
		]);
	}

	public function update_subcat() {
		
	}

	public function delete_subcat() {
		die('prevent deleting!');
		return Help::__delete('Subcat', 'Подкатегория %s удалена', 'subcat');
	}

	public function producers() {
		return View::make('admin/admin_producers')->with([
			'env' 		=> 'producers',
			'producers' => Producer::readAllProducers(),
		]);
	}

	public function update_producer() {
		
	}

	public function delete_producer() {
		die('prevent deleting!');
		return Help::__delete('Producer', 'Производитель %s удален', 'producer');
	}

/*------------------------------------------------
| AJAX
------------------------------------------------*/
	public function ajax_change_subcat() {
		// return Response::json($data);
	}

	public function ajax_set_special() {
		// return Response::json($data);
	}

	public function ajax_set_hit() {
		// return Response::json($data);
	}

	public function ajax_delete() {
		// return Response::json($data);
	}

	public function ajax_set_procurement() {
		// return Response::json($data);
	}

	public function ajax_get_subcats() {
		$category = Input::get('category');
		$all = Subcat::readAllSubcats();
		$subcats = $all[$category];
		return Response::json($subcats);
	}

	public function ajax_item_image() {
		// if (Input::get('with_image')) {
		// 	$temp_image = Input::get('with_image');

		// 	// CHANGE IMAGE NAME
		// 	$old = Help::$ITEM_PHOTO_DIR.DIRECTORY_SEPARATOR.$temp_image;
		// 	$extension = File::extension($old);
		// 	$filename = 'photo_'.time().'.'.$extension;
		// 	$new = Help::$ITEM_PHOTO_DIR.DIRECTORY_SEPARATOR.$filename;
		// 	rename($old, $new);

		// 	$fields['photo'] = $filename;
		// 	// unset($fields['with_image']); <--delete it -->
		// }


		if (Input::hasFile('photo')) {
			$file = Input::file('photo');
			$destinationPath = Help::$ITEM_PHOTO_DIR;
			$extension = $file->getClientOriginalExtension();
			// $filename = $file->getClientOriginalName(); // full
			$filename = 'temp.'.$extension;
			$file->move($destinationPath, $filename);
		}

		return Response::json($filename);
	}

	public function ajax_article_image() {
		// 
	}
}