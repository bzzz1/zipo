<?php

class Item extends Eloquent {
	protected $guarded = [];
	public $timestamps = false;
	public $primaryKey = 'item_id';

	public static function boot() {
        parent::boot();

		Item::deleting(function($item) {
			$item->pdfs()->detach();
		});
    }

	public function pdfs() {
        return $this->belongsToMany('Pdf'); // optional second argument is pivot table name
    }

	public function producer() {
		return $this->hasOne('Producer', 'producer_id', 'producer_id');
		// return $this->hasOne('Producer', 'producer_id', 'producer_id')->select(['producer']);
	}

	public function subcat() {
		return $this->hasOne('Subcat', 'subcat_id', 'subcat_id');
	}

	public static function __items() {
		return (new Item)->join('subcats', 'subcats.subcat_id', '=', 'items.subcat_id')->join('producers', 'items.producer_id', '=', 'producers.producer_id');
	}

/*----------------------------------------------*/
	public static function getItemsForCatalog() {
		$subcat_id = Input::get('subcat_id');
		$sort = Input::get('sort', 'title');
		$order = Input::get('order', 'asc');
		$pages_by = Input::get('pages_by', '10');

		$items = Item::__items();
		$items = $items->where('items.subcat_id', $subcat_id);
		$items = $items->orderBy($sort, $order);
		$items = $items->paginate($pages_by);

		return $items;
	}

	public static function getItemsForAdminCatalog() {
		$subcat_id = Input::get('subcat_id');
		$sort = Input::get('sort', 'title');
		$order = Input::get('order', 'asc');

		$items = Item::__items();
		$items = $items->where('items.subcat_id', $subcat_id);
		$items = $items->orderBy($sort, $order);

		return $items->get();
	}

	public static function getItemsByProducer() {
		$producer_id = Input::get('producer_id');
		$sort = Input::get('sort', 'title');
		$order = Input::get('order', 'asc');
		$pages_by = Input::get('pages_by', '10');

		$items = Item::__items();
		$items = $items->where('items.producer_id', $producer_id);
		$items = $items->orderBy($sort, $order);
		$items = $items->paginate($pages_by);

		return $items;
	}

	public function scopeRandom($query) {
	    return $query->orderBy(DB::raw('RAND()'));
	}

	public static function getSameItems() {
		$subcat_id = Input::get('subcat_id');
		$item_id = Input::get('item_id');

		$items = Item::__items();
		$items = $items->where('items.subcat_id', $subcat_id);
		$items = $items->whereNotIn('items.item_id', [$item_id]);
		$items = $items->random()->take(4)->get();

		return $items;
	}

	public static function getItemsByQuery() {
		$query = Input::get('query');
		$sort = Input::get('sort', 'title');
		$order = Input::get('order', 'asc');
		$pages_by = Input::get('pages_by', '10');

		$items = Item::__items();
		$items = $items->where('title', 'like', '%'.$query.'%');
		$items = $items->orWhere('code', 'like', '%'.$query.'%');
		$items = $items->orWhere('description', 'like', '%'.$query.'%');
		$items = $items->orderBy($sort, $order);
		$items = $items->paginate($pages_by);

		return $items;
	}

	public static function getSpecialItems() {
		$sort = Input::get('sort', 'title');
		$order = Input::get('order', 'asc');
		$pages_by = Input::get('pages_by', '10');

		$items = Item::__items();
		$items = $items->where('special', '1');
		$items = $items->orderBy($sort, $order);
		$items = $items->paginate($pages_by);

		return $items;
	}
}