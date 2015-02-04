<?php

class Item extends Eloquent {
	protected $guarded = [];
	public $timestamps = false;
/*------------------------------------------------
| READ
------------------------------------------------*/
	public static function readItemsByBrands($type, $brand) {
		$sort = Input::get('sort', 'item');
		$order = Input::get('order', 'ASC');

		$items = new Item;
		$items = $items->where('type', $type);
		$items = $items->where('producer', $brand);
		$items = $items->orderBy($sort, $order);
		$items = $items->paginate(12);
		return $items;
	}

	public static function readItemsBySubcategory($type, $category, $subcategory) {
		$sort = Input::get('sort', 'item');
		$order = Input::get('order', 'ASC');

		$items = new Item;
		$items = $items->where('type', $type);
		$items = $items->where('category', $category);
		$items = $items->where('subcategory', $subcategory);
		$items = $items->orderBy($sort, $order);
		$items = $items->paginate(12);
		return $items;
	}

	public static function readItemsByCategory($type, $category) {
		$sort = Input::get('sort', 'item');
		$order = Input::get('order', 'ASC');
		
		$items = new Item;
		$items = $items->where('type', $type);
		$items = $items->where('category', $category);
		$items = $items->orderBy($sort, $order);
		$items = $items->paginate(12);
		return $items;
	}


	public static function readSubcategories($type) {
		$categories = [
			0 => 'Барное',
			1 => 'Нейтральное',
			2 => 'Посуда и инвентарь',
			3 => 'Посудомоечное',
			4 => 'Технологическое',
			5 => 'Упаковочное',
			6 => 'Хлебопекарное',
			7 => 'Холодильное'
		];

		$subcategories = [];
		for ($i=0; $i<8; $i++) {
			$subcategory = new Item;
			$subcategory = $subcategory->distinct();
			$subcategory = $subcategory->orderBy('subcategory');
			$subcategory = $subcategory->where('type', $type);
			$subcategory = $subcategory->where('category', $categories[$i]);
			$subcategory = $subcategory->lists('subcategory');
			$subcategories[$categories[$i]] = $subcategory;
		}

		return $subcategories;
	}

	public static function readBrands($type) {
		$brands = new Item;
		$brands = $brands->distinct();
		$brands = $brands->where('type', $type);
		$brands = $brands->whereType($type);
		$brands = $brands->orderBy('producer', 'ASC');
		$brands = $brands->lists('producer');
		return $brands;
	}

	public static function readItemByCode($code) {
		$item = new Item;
		$item = $item->where('code', $code);
		$item = $item->paginate(12);
		return $item;
	}

	public static function readElementByCode($code) {
		$element = new Item;
		$element = $element->where('code', $code);
		$element = $element->first();
		return $element;
	}

	public static function readItemsBySearch($param) {
		$sort = Input::get('sort', 'item');
		$order = Input::get('order', 'ASC');

		$items = new Item;
		$items = $items->where('item', 'like', '%'.$param.'%');
		$items = $items->orderBy($sort, $order);
		$items = $items->paginate(12);
		return $items;
	}
/*------------------------------------------------
| CREATE UPDATE
------------------------------------------------*/
	public static function updateOrCreateItemByCode($code, $fields) {
		$item = new Item;
		if ($code) {
			$item = $item->where('code', $code); 
			$item = $item->first();
		}		
		$item->fill($fields);
		$item->save();
	}
/*------------------------------------------------
| DELETE
------------------------------------------------*/
	public static function deleteItemByCode($code) {
		Item::where('code', $code)->delete();
	}
}