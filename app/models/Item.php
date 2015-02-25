<?php

class Item extends Eloquent {
	protected $guarded = [];
	public $timestamps = false;
	protected $primaryKey = 'item_id';

	public function producer() {
		return $this->hasOne('Producer', 'producer_id', 'producer_id');
	}
	public function subcat() {
		return $this->hasOne('Subcat', 'subcat_id', 'subcat_id');
	}

	public static function __items() {
		// 	$item = Item::with('subcat', 'producer');
		// $customer->drinks()->attach($drink_id); //this executes the insert-query

		$items = new Item;
		$items = $items->join('subcats', 'subcats.subcat_id', '=', 'items.subcat_id')
						->join('producers', 'items.producer_id', '=', 'producers.producer_id');
		return $items;
	}

// /*------------------------------------------------
// | READ
// ------------------------------------------------*/
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

	public static function getSameItems() {
		$subcat_id = Input::get('subcat_id');
		$item_id = Input::get('item_id');

		$items = Item::__items();
		$items = $items->where('items.subcat_id', $subcat_id);
		$items = $items->whereNotIn('items.item_id', [$item_id]);
		$items = $items->take(4)->get();

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