<?php 

trait FlattenableTrait {
	// public function scopeFlate($query) {
	// 	$arr = $query->toArray();

	// 	foreach($arr as $key => $val) {
	// 		$arr[$key] = $this->array_flat($val);
	// 	}

	//     return $arr;
	// }

	// public function array_flat($arr) {
	// 	$output = [];
	// 	foreach($arr as $key => $val) {
	// 		if (is_array($val)) {
	// 			$output = array_merge($output, $val);
	// 		} else {
	// 			$output[$key] = $val;
	// 		}
	// 	}
	// 	return $output;
	// }
}