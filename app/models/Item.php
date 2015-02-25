<?php

class Item extends Eloquent {
	protected $guarded = [];
	public $timestamps = false;
	protected $primaryKey = 'item_id';

	public function producers() {
		return $this->hasOne('Producer', 'producer_id', 'producer_id')->select(['producer_id', 'producer']);
	}
	public function subcats() {
		return $this->hasOne('Subcat', 'subcat_id', 'subcat_id')->select(['subcat_id', 'subcat', 'category']);
	}

	public static function __items() {
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

	public static function getItemById() {
		$item_id = Input::get('item_id');
		$item = new Item;
		// $item = Item::eagerLoadAll()->all();

		// $item = Item::with('subcat', 'producer');
		// $item = $item->find(1)->producers();
		// $item = $item->with('subcats', 'producers');
		dd($item->get());
		// $item = $item->join('subcats', 'subcats.subcat_id', '=', 'items.subcat_id')
		// 		->join('producers', 'items.producer_id', '=', 'producers.producer_id');


		dd($item->first()->category);

		// ERROR !!!!
		// $item = Item::__items();
		$item = new Item;
		$item = $item->join('subcats', 'subcats.subcat_id', '=', 'items.subcat_id')
						->join('producers', 'items.producer_id', '=', 'producers.producer_id');
		dd($item->get());
		die();

		$item = $item->where('item_id', $item_id);
		$item = $item->first();

		return $item;
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