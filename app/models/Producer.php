<?php

class Producer extends Eloquent {
	protected $guarded = [];
	public $timestamps = false;
	public $primaryKey = 'producer_id';

	public function items() {
		return $this->belongsTo('Item', 'producer_id', 'producer_id');
	}
/*------------------------------------------------
| READ
------------------------------------------------*/
	public static function readAllProducers() {
		$producers = Producer::orderBy('producer', 'ASC');
		$producers = $producers->get();
		return $producers;
	}
}