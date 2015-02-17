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

	public static function getProducerById() {
		$producer_id = Input::get('producer_id');

		$producer = new Producer;
		$producer = $producer->where('producer_id', $producer_id);
		$producer = $producer->first();
		return $producer;
	}
}