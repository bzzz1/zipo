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

	public function admin_logout() {
		Auth::admin()->logout();
		return Redirect::to('/');
	}

	public function catalog() {
		
	}

	public function news() {
		
	}

	public function import() {
		
	}

	public function set_discount() {
		
	}

	public function search() {
		
	}

	public function items() {
		
	}

	public function article() {

	}

	public function change_item() {
		
	}

	public function update_item() {
		
	}

	public function change_new() {
		
	}

	public function update_new() {
		
	}

	public function subcategories() {
		
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