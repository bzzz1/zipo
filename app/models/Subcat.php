<?php

class Subcat extends Eloquent {
	protected $guarded = [];
	public $timestamps = false;
	public $primaryKey = 'subcat_id';

	public function items() {
		return $this->belongsTo('Item', 'subcat_id', 'subcat_id');
	}

	public function pdf() {
		return $this->belongsTo('Pdf', 'subcat_id', 'subcat_id');
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
		// $subcats = [];

		foreach ($categories as $category) {
			$subcats[$category] = $subcats->where('category', $category)->groupBy('subcat')->get();
		}

		return $subcats;
	}

	public static function getSubcatsByCategory($category_trans) {
		$category_fixed = HELP::$translit[$category_trans];

		$subcats = new Subcat;
		$subcats = $subcats->where('category', $category_fixed);
		$subcats = $subcats->get();
		
		return $subcats;
	}

	public static function getSubcatsTitlesByCategory() {
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

		$producers_by_category = [];
		
		// foreach ($categories as $category) {
		// 	$producers_by_category[] = Pdf::with('subcat', 'producer')->get()->map(function($pdf) use ($category) {
		// 		if ($pdf->subcat['category'] == $category) {
		// 			echo 'gggggggggg';
		// 			dd('ffffffffffffffff');
		// 			return $pdf->producer;
		// 		}
		// 	});
		// }

		// Pdf::with('subcat', 'producer')->get()->map(function($pdf) {
		// 				if ($pdf->subcat['category'] == 'Холодильное_en') {
		// 					return $pdf->producer;
		// 				}
		// 			});
		

		// list all producers that pdfs has group by category
		// +++  деталлирокки отсортированные по производителю и subcat_id
		// на items if env == prods_by_subcat, передать producer в current

		foreach ($categories as $category) {
			$subcats_titles = Subcat::where('category', $category)->lists('subcat');
			$subcats[$category] = $subcats_titles;
		}

		return $subcats;
	}
}