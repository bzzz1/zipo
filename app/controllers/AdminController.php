<?php
class MainController extends BaseController {
	public function admin() {
		if (Auth::check()) {
			return View::make('admin/admin')->with([
				'element'	=> new Item
			]);
		} else {
			return View::make('admin/login');
		}
	}

	public function admin_login() {
		// dd(Hash::make('string'));
		// dd(hash('sha512', 'string'));

		// use $creds to escape where _token problem
		$creds = [
			'password'	=> Input::get('password'),
			'login' 	=> Input::get('login')
		];

		// if (Auth::validate($creds)) {
		// 	$admin = Member::where('login', $creds['login'])->first();
		// 	Auth::login($admin, true); 		// true to remember user not only for this page session
		// }

		Auth::attempt($creds);

		// with or without login, anyway redirect to /admin
		return Redirect::to('admin');
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

	public function new() {
		
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