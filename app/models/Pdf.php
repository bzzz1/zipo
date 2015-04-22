<?php

class Pdf extends Eloquent {
	protected $guarded = [];
	public $timestamps = false;
	public $primaryKey = 'pdf_id';

	public function producer() {
		return $this->hasOne('Producer', 'producer_id', 'producer_id');
	}

	public function items() {
        return $this->belongsToMany('Item'); // optional second argument is pivot table name
    }

/*----------------------------------------------*/
    public function scopeAllProducers($query) {
        // return $query->;
    }

    public function scopeAllPdfByProd($query, $producer_id) {
    	// $producer_id = Input::get('producer_id');
        return $query->where('producer_id', $producer_id)->get();
    }

    // public function scopeItemsByPdf($query) {
    // 	// return $query->;
    // }
}