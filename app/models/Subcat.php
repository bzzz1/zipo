<?php

class Subcat extends Eloquent {
	protected $guarded = [];
	public $timestamps = false;
	public $primaryKey = 'subcat_id';

	public static function boot() {
        parent::boot();

		Subcat::deleted(function($subcat) {
			$subcat->pdf->fill(['subcat_id' => '0'])->save();
		});
    }

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

		foreach ($categories as $category) {
			$subcats[$category] = $subcats->where('category', $category)->groupBy('subcat_id')->orderBy('subcat', 'asc')->get();
		}

		return $subcats;
	}

	public static function getSubcatsByCategory($category_trans) {
		$category_fixed = HELP::$translit[$category_trans];

		return Subcat::where('category', $category_fixed)->orderBy('subcat', 'asc')->get();
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
		
		foreach ($categories as $category) {
			$subcats_titles = Subcat::where('category', $category)->lists('subcat');
			$subcats[$category] = $subcats_titles;
		}

		return $subcats;
	}
}