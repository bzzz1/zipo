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
/*------------------------------------------------
| READ
------------------------------------------------*/
	public function scopeAllPdfs($query) {
	    return $query->with('pdf')->get()->filter(function($producer) {
	    	if ($producer->pdf != Null) {
	    		return $producer;
	    	}
	    });
	}
	public static function readAllProducers() {
		$producers = Producer::orderBy('producer', 'ASC');
		$producers = $producers->get();
		return $producers;
	}
}