<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	public function storeRecents() {
		session_start(); 

		if (! isset($_SESSION['user_id'])) {
			$user_id = rand(1, 1000000); 
			$_SESSION['user_id'] = $user_id; 
			Recent::writeUserToRecents($user_id); 
		} else {
			$user_id = $_SESSION['user_id'];
		}

		Recent::writeRecentsByUser($user_id);
	}
}
