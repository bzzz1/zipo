<?php namespace Presenters;

use Presenters\Presenter;

class Item extends Presenter {	
	public function price() {
		$rate = get_EUR_rate();
		if ('EUR' == $this->val('currency')) {
			return $this->val()*$rate;
		} else {
			return $this->val();
		}
	}

	public function currency() {
		if ('EUR' == $this->val()) {
			return 'RUB';
		} else {
			return $this->val();
		}
	}
}