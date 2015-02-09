<?php

class Subcat extends Eloquent {
	protected $guarded = [];
	public $timestamps = false;

	public function item() {
		return $this->belongsTo('Item', 'subcat_id', 'subcat_id');
	}
/*------------------------------------------------
| READ
------------------------------------------------*/
	public static function readAllSubcats() {
		$subcats = new Subcat;
		$subcats = $subcats->all();
		$categories = [
			'Механическое',
			'Тепловое',
			'Холодильное',
			'Посудомоечное'
		];

		foreach ($categories as $category) {
			foreach ($subcats as $subcat) {
				$subcat_producer = $subcat->item->producer;
				if ($subcat_producer->import == 1) {
					if ($subcat->category == $category) {
						$foreign[$category] = $subcat;
					}
				} else {
					if ($subcat->category == $category) {
						$domestic[$category] = $subcat;
					}
				}
			}
		}

		$subcats = [
			'foreign'  => $foreign,
			'domestic' => $domestic
		];

		// dd($subcats);
		return $subcats;
	}
}