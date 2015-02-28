<?php

class Subcat extends Eloquent {
	protected $guarded = [];
	public $timestamps = false;
	public $primaryKey = 'subcat_id';

	public function items() {
		return $this->belongsTo('Item', 'subcat_id', 'subcat_id');
	}
/*------------------------------------------------
| READ
------------------------------------------------*/
	public static function readAllSubcats() {
		$categories = [
			'Механическое_en',
			'Тепловое_en',
			'Холодильное_en',
			'Посудомоечное_en',
			'Механическое_ru',
			'Тепловое_ru',
			'Холодильное_ru',
			'Посудомоечное_ru'
		];

		$subcats = new Subcat;

		foreach ($categories as $category) {
			$subcats[$category] = $subcats->where('category', $category)->groupBy('subcat')->get();
		}

		return $subcats;
	}

	public static function getSubcatsByCategory($category) {
		$category_fixed = Help::$translit[$category];

		$subcats = new Subcat;
		$subcats = $subcats->where('category', $category_fixed);
		$subcats = $subcats->get();
		
		return $subcats;
	}
}