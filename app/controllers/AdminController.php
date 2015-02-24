<?php
class AdminController extends BaseController {
	public function admin() {
		if (Auth::admin()->check()) {
			return View::make('admin/admin');
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
		return View::make('admin/admin_catalog')->with([
			'env' 		=> 'catalog_admin',
			'subcats'   => Subcat::readAllSubcats(),
			'producers' => Producer::readAllProducers(),

		]);
	}

	public function subcat() {
		return View::make('items')->with([
			'env' 		=> 'catalog_admin'
		]);
	}

	public function change_item() {
		return View::make('admin/admin_change_item')->with([
			'env' 		=> 'change_item'
		]);
	}

	public function update_item() {
		
	}

	public function delete_item() {
		
	}

	public function item_upload_image() {
		
	}

	public function articles() {
		return View::make('admin/admin_articles')->with([
			'env' 		=> 'articles',
			'articles'	=> Article::readAllArticles(),
		]);
	}

	public function change_article() {
		return View::make('admin/admin_change_article')->with([
			'env' 		=> 'change_article'
		]);
	}

	public function update_article() {
		
	}

	public function delete_article() {
		
	}

	public function article_upload_image() {
		
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