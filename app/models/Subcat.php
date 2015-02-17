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
			$subcats[$category] = $subcats->join('items', 'items.subcat_id', '=', 'subcats.subcat_id')
								->where('category', $category)->groupBy('subcat')->get(['category', 'subcat', 'subcats.subcat_id']);
		}

		return $subcats;
	}

	public static function getCurrentSubcat() {
		$subcat_id = Input::get('subcat_id');
		
		$cur_subcat = new Subcat;
		$cur_subcat = $cur_subcat->where('subcat_id', $subcat_id);
		$cur_subcat = $cur_subcat->first();
		return $cur_subcat;
	}

	public static function getSubcatsByCategory($category) {
		$category_fixed = Helper::$translit[$category];

		$subcats = new Subcat;
		$subcats = $subcats->where('category', $category_fixed);
		$subcats = $subcats->get();
		
		return $subcats;
	}
}