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
			$destinationPath = Helper::$excel_import_dir;
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
		$rules = [
			'code'	=> 'required|unique:items,code,'.$item_id.',item_id'
		];

		$validator = Validator::make($fields, $rules);

		if ($validator->fails()) {
			return Redirect::back()->withInput()
				->with('message', '<p class="message_red">Товар с таким кодом уже существует. Код должен быть уникальным!</p>');
		} else {
			$item = Item::updateOrCreate(['item_id' => $item_id], $fields);
		}

		if ($item_id) { 
			return Redirect::back()->with('message', '<p class="message_green">Товар '.$item->title.' изменен</p>');
		} else {
			return Redirect::back()->with('message', '<p class="message_green">Товар '.$item->title.' добавлен</p>');
		}

		// if (Input::get('with_image')) {
		// 	$temp_image = Input::get('with_image');

		// 	// CHANGE IMAGE NAME
		// 	$old = Helper::$item_photo_dir.DIRECTORY_SEPARATOR.$temp_image;
		// 	$extension = File::extension($old);
		// 	$filename = 'photo_'.time().'.'.$extension;
		// 	$new = Helper::$item_photo_dir.DIRECTORY_SEPARATOR.$filename;
		// 	rename($old, $new);

		// 	$fields['photo'] = $filename;
		// 	// unset($fields['with_image']); <--delete it -->
		// }
	}

	public function delete_item() {
		$item = Item::find(Input::get('item_id'));
		Item::destroy(Input::get('item_id'));
		return Redirect::back()->with('message', 'Товар '.$item->title.' удален');
	}

	public function item_upload_image() {
		if (Input::hasFile('photo')) {
			$file = Input::file('photo');
			$destinationPath = Helper::$item_photo_dir;
			$extension = $file->getClientOriginalExtension();
			// $filename = $file->getClientOriginalName(); // full
			$filename = 'temp.'.$extension;
			$file->move($destinationPath, $filename);
		}

		return Redirect::back()->with('temp', $filename);
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
		$filename = 'article_'.time();
	}

	public function delete_article() {
		dd(Input::get('article_id'));
		$article_id = Input::get('article_id');
		// Article::where('article_id', $article_id)->delete();
		Article::destroy($article_id);
		return Redirect::back()->with('message', 'Новость удалена');
	}

	public function article_upload_image() {
		if (Input::hasFile('photo')) {
			$file = Input::file('photo');
			$destinationPath = Helper::$article_photo_dir;
			$extension = $file->getClientOriginalExtension();
			// $filename = $file->getClientOriginalName(); // full
			$filename = 'temp_article.'.$extension;
			$file->move($destinationPath, $filename);
		}

		return Redirect::back()->with('temp_article', $filename);
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
		dd(Input::get('subcat_id'));
		$subcat_id = Input::get('subcat_id');
		// Subcat::where('subcat_id', $subcat_id)->delete();
		Subcat::destroy($subcat_id);
		return Redirect::back()->with('message', 'Подкатегория удалена');
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
		dd(Input::get('producer_id'));
		$producer_id = Input::get('producer_id');
		// Producer::where('producer_id', $producer_id)->delete();
		Producer::destroy($producer_id);
		return Redirect::back()->with('message', 'Производитель удален');
	}

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
}