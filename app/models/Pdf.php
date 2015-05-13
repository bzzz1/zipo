<?php

class Pdf extends Eloquent {

	// use FlattenableTrait;

	public function newCollection(array $models = array()) {
		return new BaseCollection($models);
	}

	protected $guarded = [];
	public $timestamps = false;
	public $primaryKey = 'pdf_id';

	public static function boot() {
        parent::boot();

		Pdf::deleted(function($pdf) {
			$filepath = HELP::$PDF_IMPORT_DIR.DIRECTORY_SEPARATOR.$pdf->file;

			File::delete($filepath);
			$pdf->items()->detach();
		});
    }

	public function producer() {
		return $this->hasOne('Producer', 'producer_id', 'producer_id');
	}

	public function subcat() {
		return $this->hasOne('Subcat', 'subcat_id', 'subcat_id');
	}

	public function items() {
        return $this->belongsToMany('Item'); // optional second argument is pivot table name
    }

/*----------------------------------------------*/
	public static function allPdfByCat() {
		$producer_id = Input::get('producer_id');
		$subcat_id = Input::get('subcat_id');

		return Pdf::where('producer_id', $producer_id)->where('subcat_id', $subcat_id)->orderBy('good')->get();
	}	

    public static function allPdfByProd() {
    	$producer_id = Input::get('producer_id');
    	$category = Input::get('category');

    	$pdfs = Pdf::with(['producer', 'subcat'])->where('producer_id', $producer_id)->get()->flate();

    	$items = $pdfs->filter(function($pdf) use ($category) {
    		if ($pdf->category == $category) {
    			return $pdf;
    		}
    	});

    	return $items;
    }

	// Item::find(600)->pdfs()->attach(1)
	// Pdf::find(1)->items()->attach(2)
	// Pdf::create(['pdf_id'=>2, 'file'=>'222', 'good'=>'222', 'producer_id'=>1])
}