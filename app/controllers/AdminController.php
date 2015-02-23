<?php
class AdminController extends BaseController {
	public function admin() {
		if (Auth::admin()->check()) {
			return View::make('admin/admin');
		} else {
			return View::make('admin/login');
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
		
	}

	public function search() {
		
	}

	public function import() {
		
	}

	public function admin_logout() {
		Auth::admin()->logout();
		return Redirect::to('/');
	}

	public function catalog() {
		return View::make('index_only')->with([
			'env' 		=> 'catalog',
			'subcats'   => Subcat::readAllSubcats(),
			'producers' => Producer::readAllProducers(),

		]);
	}

	public function subcat() {
		return View::make('items_only')->with([
			'env' 		=> 'catalog'
		]);
	}

	public function change_item() {
		return View::make('admin/admin_change_item')->with([
			'env' 		=> 'change_item'
		]);
	}

	public function articles() {
		return View::make('admin/admin_articles')->with([
			'env' 		=> 'articles'
		]);
	}

	public function change_article() {
		return View::make('admin/admin_change_article')->with([
			'env' 		=> 'change_article'
		]);
	}

	public function subcats() {
		return View::make('admin/admin_subcats')->with([
			'env' 		=> 'subcats'
		]);
	}

	public function producers() {
		return View::make('admin/admin_producers')->with([
			'env' 		=> 'producers',
			'producers' => Producer::readAllProducers(),
		]);
	}

	public function items() {
		
	}

	public function article() {

	}

	public function change_new() {
		
	}

	public function update_new() {
		
	}

	public function delete_item() {
		
	}

	public function delete_new() {
		
	}

	public function delete_subcat() {
		
	}

	public function delete_producer() {
		
	}

	public function change_subcat() {
		
	}

	public function change_producer() {
		
	}

	public function ajax_change_subcat() {
		
	}

	public function ajax_set_special() {
		
	}

	public function ajax_set_hit() {
		
	}

	public function ajax_delete() {
		
	}

	public function ajax_set_procurement() {
		
	}
}