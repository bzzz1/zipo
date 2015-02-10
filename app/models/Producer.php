<?php

class Producer extends Eloquent {
	protected $guarded = [];
	public $timestamps = false;

	public function item() {
		return $this->belongsTo('Item', 'producer_id', 'producer_id');
	}
/*------------------------------------------------
| READ
------------------------------------------------*/
	public static function readAllProducers() {
		$producers = new Producer;
		$producers = $producers->orderBy('producer', 'ASC');
		$producers = $producers->get();
		return $producers;
	}
}