<?php

class Producer extends Eloquent {
	protected $guarded = [];
	public $timestamps = false;
	public $primaryKey = 'producer_id';

	public function items() {
		return $this->belongsTo('Item', 'producer_id', 'producer_id');
	}

	public function pdf() {
		return $this->belongsTo('Pdf', 'producer_id', 'producer_id');
	}
	
	// public function subcat() {
	// 	return $this->hasManyThrough('Subcat', 'Pdf', 'subcat_id', 'subcat_id');
	// }

	// public function manyThroughMany($related, $through, $firstKey, $secondKey, $pivotKey) {
 //        $model = new $related;
 //        $table = $model->getTable();
 //        $throughModel = new $through;
 //        $pivot = $throughModel->getTable();

 //        return $model
 //            ->join($pivot, $pivot . '.' . $pivotKey, '=', $table . '.' . $secondKey)
 //            ->select($table . '.*')
 //            ->where($pivot . '.' . $firstKey, '=', $this->producer_id);
 //    }

 //    public function subcat() {
 //        return $this->manyThroughMany('Subcat', 'Pdf', 'subcat_id', 'subcat_id', 'subcat_id');
	// }
/*----------------------------------------------*/
	public static function getPdfProducersByCategory() {
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

		$pdfs_subcats = Pdf::join('subcats', 'pdfs.subcat_id', '=', 'subcats.subcat_id')->join('producers', 'producers.producer_id', '=', 'pdfs.producer_id');

		foreach ($categories as $category) {
			$producers[$category] = $pdfs_subcats->where('category', $category)->get();
		}

		return $producers;
	}

	public static function readAllProducers() {
		$producers = Producer::orderBy('producer', 'ASC');
		$producers = $producers->get();
		return $producers;
	}
}