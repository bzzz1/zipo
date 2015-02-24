<?php

class Item extends Eloquent {
	protected $guarded = [];
	public $timestamps = false;

	public function producer() {
		return $this->hasOne('Producer', 'producer_id', 'producer_id');
	}
	public function subcat() {
		return $this->hasOne('Subcat', 'subcat_id', 'subcat_id');
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

		// ERROR !!!!
		$item = Item::__items();
		// $item = new Item;
		// $item = $item->join('subcats', 'subcats.subcat_id', '=', 'items.subcat_id')
		// 				->join('producers', 'items.producer_id', '=', 'producers.producer_id');
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

/*------------------------------------------------
| CREATE UPDATE
------------------------------------------------*/
	public static function updateOrCreateItemById($fields) {
		$item_id = Input::get('item_id');

		$item = new Item;
		if ($item_id) {
			$item = $item->where('item_id', $item_id); 
			$item = $item->first();
		}		
		$item->fill($fields);
		$item->save();

		// GET JUST SAVED ITEM ID!!!!!!!!
		// return $item_id;
	}

/*------------------------------------------------
| DELETE
------------------------------------------------*/
	public static function deleteItemById() {
		$item_id = Input::get('item_id');

		Item::where('item_id', $item_id)->delete();
	}	
}

// 	public static function readItemsByBrands($type, $brand) {
// 		$sort = Input::get('sort', 'item');
// 		$order = Input::get('order', 'ASC');

// 		$items = new Item;
// 		$items = $items->where('type', $type);
// 		$items = $items->where('producer', $brand);
// 		$items = $items->orderBy($sort, $order);
// 		$items = $items->paginate(12);
// 		return $items;
// 	}

// 	public static function readItemsBySubcategory($type, $category, $subcategory) {
// 		$sort = Input::get('sort', 'item');
// 		$order = Input::get('order', 'ASC');

// 		$items = new Item;
// 		$items = $items->where('type', $type);
// 		$items = $items->where('category', $category);
// 		$items = $items->where('subcategory', $subcategory);
// 		$items = $items->orderBy($sort, $order);
// 		$items = $items->paginate(12);
// 		return $items;
// 	}

// 	public static function readItemsByCategory($type, $category) {
// 		$sort = Input::get('sort', 'item');
// 		$order = Input::get('order', 'ASC');
		
// 		$items = new Item;
// 		$items = $items->where('type', $type);
// 		$items = $items->where('category', $category);
// 		$items = $items->orderBy($sort, $order);
// 		$items = $items->paginate(12);
// 		return $items;
// 	}


// 	public static function readSubcategories($type) {
// 		$categories = [
// 			0 => 'Барное',
// 			1 => 'Нейтральное',
// 			2 => 'Посуда и инвентарь',
// 			3 => 'Посудомоечное',
// 			4 => 'Технологическое',
// 			5 => 'Упаковочное',
// 			6 => 'Хлебопекарное',
// 			7 => 'Холодильное'
// 		];

// 		$subcategories = [];
// 		for ($i=0; $i<8; $i++) {
// 			$subcategory = new Item;
// 			$subcategory = $subcategory->distinct();
// 			$subcategory = $subcategory->orderBy('subcategory');
// 			$subcategory = $subcategory->where('type', $type);
// 			$subcategory = $subcategory->where('category', $categories[$i]);
// 			$subcategory = $subcategory->lists('subcategory');
// 			$subcategories[$categories[$i]] = $subcategory;
// 		}

// 		return $subcategories;
// 	}

// 	public static function readBrands($type) {
// 		$brands = new Item;
// 		$brands = $brands->distinct();
// 		$brands = $brands->where('type', $type);
// 		$brands = $brands->whereType($type);
// 		$brands = $brands->orderBy('producer', 'ASC');
// 		$brands = $brands->lists('producer');
// 		return $brands;
// 	}

// 	public static function readItemByCode($code) {
// 		$item = new Item;
// 		$item = $item->where('code', $code);
// 		$item = $item->paginate(12);
// 		return $item;
// 	}

// 	public static function readElementByCode($code) {
// 		$element = new Item;
// 		$element = $element->where('code', $code);
// 		$element = $element->first();
// 		return $element;
// 	}

// 	public static function readItemsBySearch($param) {
// 		$sort = Input::get('sort', 'item');
// 		$order = Input::get('order', 'ASC');

// 		$items = new Item;
// 		$items = $items->where('item', 'like', '%'.$param.'%');
// 		$items = $items->orderBy($sort, $order);
// 		$items = $items->paginate(12);
// 		return $items;
// 	}
// /*------------------------------------------------
// | CREATE UPDATE
// ------------------------------------------------*/
// 	public static function updateOrCreateItemByCode($code, $fields) {
// 		$item = new Item;
// 		if ($code) {
// 			$item = $item->where('code', $code); 
// 			$item = $item->first();
// 		}		
// 		$item->fill($fields);
// 		$item->save();
// 	}
// /*------------------------------------------------
// | DELETE
// ------------------------------------------------*/
// 	public static function deleteItemByCode($code) {
// 		Item::where('code', $code)->delete();
// 	}
// }