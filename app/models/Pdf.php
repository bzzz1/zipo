<?php

class Pdf extends Eloquent {
	protected $guarded = [];
	public $timestamps = false;
	public $primaryKey = 'pdf_id';

	public function producer() {
		return $this->hasOne('Producer', 'producer_id', 'producer_id');
	}

	public function items() {
        return $this->belongsToMany('Item');
    }
}