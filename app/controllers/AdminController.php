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

	public function login() {
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
}