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
		// $categories = [
		// 	'Механическое',
		// 	'Тепловое',
		// 	'Холодильное',
		// 	'Посудомоечное'
		// ];

		$subcats = new Subcat;

		$foreign['Механическое'] = $subcats->join('items', 'items.subcat_id', '=', 'subcats.subcat_id')
							->join('producers', 'items.producer_id', '=', 'producers.producer_id')
							->where('import', 1)->where('category', 'Механическое')->groupBy('subcat')->get(['subcat', 'subcats.subcat_id']);
		$foreign['Тепловое'] = $subcats->join('items', 'items.subcat_id', '=', 'subcats.subcat_id')
							->join('producers', 'items.producer_id', '=', 'producers.producer_id')
							->where('import', 1)->where('category', 'Тепловое')->groupBy('subcat')->get(['subcat', 'subcats.subcat_id']);
		$foreign['Холодильное'] = $subcats->join('items', 'items.subcat_id', '=', 'subcats.subcat_id')
							->join('producers', 'items.producer_id', '=', 'producers.producer_id')
							->where('import', 1)->where('category', 'Холодильное')->groupBy('subcat')->get(['subcat', 'subcats.subcat_id']);
		$foreign['Посудомоечное'] = $subcats->join('items', 'items.subcat_id', '=', 'subcats.subcat_id')
							->join('producers', 'items.producer_id', '=', 'producers.producer_id')
							->where('import', 1)->where('category', 'Посудомоечное')->groupBy('subcat')->get(['subcat', 'subcats.subcat_id']);
		$domestic['Механическое'] = $subcats->join('items', 'items.subcat_id', '=', 'subcats.subcat_id')
							->join('producers', 'items.producer_id', '=', 'producers.producer_id')
							->where('import', 0)->where('category', 'Механическое')->groupBy('subcat')->get(['subcat', 'subcats.subcat_id']);
		$domestic['Тепловое'] = $subcats->join('items', 'items.subcat_id', '=', 'subcats.subcat_id')
							->join('producers', 'items.producer_id', '=', 'producers.producer_id')
							->where('import', 0)->where('category', 'Тепловое')->groupBy('subcat')->get(['subcat', 'subcats.subcat_id']);
		$domestic['Холодильное'] = $subcats->join('items', 'items.subcat_id', '=', 'subcats.subcat_id')
							->join('producers', 'items.producer_id', '=', 'producers.producer_id')
							->where('import', 0)->where('category', 'Холодильное')->groupBy('subcat')->get(['subcat', 'subcats.subcat_id']);
		$domestic['Посудомоечное'] = $subcats->join('items', 'items.subcat_id', '=', 'subcats.subcat_id')
							->join('producers', 'items.producer_id', '=', 'producers.producer_id')
							->where('import', 0)->where('category', 'Посудомоечное')->groupBy('subcat')->get(['subcat', 'subcats.subcat_id']);

		$subcats = [
			'foreign'  => $foreign,
			'domestic' => $domestic
		];

		return $subcats;
	}
}