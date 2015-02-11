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
			$subcats[$category] = $subcats->join('items', 'items.subcat_id', '=', 'subcats.subcat_id')->get();
	
								// ->join('producers', 'items.producer_id', '=', 'producers.producer_id')
								// ->where('import', 1)
								// ->where('category', $category)->get();
								// ->groupBy('subcat')->get(['subcat', 'subcats.subcat_id']);
			// $subcats['Тепловое_en'] = $subcats->join('items', 'items.subcat_id', '=', 'subcats.subcat_id')
			// 					->join('producers', 'items.producer_id', '=', 'producers.producer_id')
			// 					->where('import', 1)->where('category', 'Тепловое_en')->groupBy('subcat')->get(['subcat', 'subcats.subcat_id']);
			// $subcats['Холодильное_en'] = $subcats->join('items', 'items.subcat_id', '=', 'subcats.subcat_id')
			// 					->join('producers', 'items.producer_id', '=', 'producers.producer_id')
			// 					->where('import', 1)->where('category', 'Холодильное_en')->groupBy('subcat')->get(['subcat', 'subcats.subcat_id']);
			// $subcats['Посудомоечное_en'] = $subcats->join('items', 'items.subcat_id', '=', 'subcats.subcat_id')
			// 					->join('producers', 'items.producer_id', '=', 'producers.producer_id')
			// 					->where('import', 1)->where('category', 'Посудомоечное_en')->groupBy('subcat')->get(['subcat', 'subcats.subcat_id']);
			// $subcats['Механическое_ru'] = $subcats->join('items', 'items.subcat_id', '=', 'subcats.subcat_id')
			// 					->join('producers', 'items.producer_id', '=', 'producers.producer_id')
			// 					->where('import', 0)->where('category', 'Механическое_ru')->groupBy('subcat')->get(['subcat', 'subcats.subcat_id']);
			// $subcats['Тепловое_ru'] = $subcats->join('items', 'items.subcat_id', '=', 'subcats.subcat_id')
			// 					->join('producers', 'items.producer_id', '=', 'producers.producer_id')
			// 					->where('import', 0)->where('category', 'Тепловое_ru')->groupBy('subcat')->get(['subcat', 'subcats.subcat_id']);
			// $subcats['Холодильное_ru'] = $subcats->join('items', 'items.subcat_id', '=', 'subcats.subcat_id')
			// 					->join('producers', 'items.producer_id', '=', 'producers.producer_id')
			// 					->where('import', 0)->where('category', 'Холодильное_ru')->groupBy('subcat')->get(['subcat', 'subcats.subcat_id']);
			// $subcats['Посудомоечное_ru'] = $subcats->join('items', 'items.subcat_id', '=', 'subcats.subcat_id')
			// 					->join('producers', 'items.producer_id', '=', 'producers.producer_id')
			// 					->where('import', 0)->where('category', 'Посудомоечное_ru')->groupBy('subcat')->get(['subcat', 'subcats.subcat_id']);
		}

		print_r($subcats);
		die();
		return $subcats;
	}

	public static function getCurrentSubcat() {
		$subcat_id = Input::get('subcat_id');
		
		$cur_subcat = new Subcat;
		$cur_subcat = $cur_subcat->where('subcat_id', $subcat_id);
		$cur_subcat = $cur_subcat->first();
		return $cur_subcat;
	}
}