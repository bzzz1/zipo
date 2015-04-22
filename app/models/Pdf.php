<?php

class Pdf extends Eloquent {
	protected $guarded = [];
	public $timestamps = false;
	public $primaryKey = 'pdf_id';

	// Pdf::find(1)->producer->producer
	public function producer() {
		return $this->hasOne('Producer', 'producer_id', 'producer_id');
	}

	public function items() {
        return $this->belongsToMany('Item'); // optional second argument is pivot table name
    }
}