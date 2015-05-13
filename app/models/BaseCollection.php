<?php 

use Illuminate\Database\Eloquent\Collection;

class BaseCollection extends Collection {
	public function flate() {
		$items = $this->toArray($this->items);

		foreach($items as $key => $val) {
			$items[$key] = $this->array_flat($val);
		}

		return new static($items);
	}

	public function array_flat($arr) {
		$output = [];
		foreach($arr as $key => $val) {
			if (is_array($val)) {
				$output = array_merge($output, $val);
			} else {
				$output[$key] = $val;
			}
		}
		return $output;
	}
}