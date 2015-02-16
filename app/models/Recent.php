<?php

class Recent extends Eloquent {
	protected $guarded = [];
	public $timestamps = false;
// /*------------------------------------------------
// | READ
// ------------------------------------------------*/
	public static function readAllRecents() {
		$current_user = '454hyjk566ghjg536';

		$recents = new Recent;
		$recents = $recents->orderBy('time', 'DESC');
		$recents = $recents->where('user_id', $current_user);
		$recents = $recents->first();

		$recents_ids = [
			$recents['first'],
			$recents['second'],
			$recents['third'],
			$recents['fourth'],
		];

		$items = new Item;
		$items = $items->join('subcats', 'subcats.subcat_id', '=', 'items.subcat_id')
						->join('producers', 'items.producer_id', '=', 'producers.producer_id');
		$items = $items->whereIn('item_id', $recents_ids);
		$items = $items->get();

		return $items;
	}
//*------------------------------------------------
// | CREATE UPDATE
// ------------------------------------------------*/
	public static function writeUserToRecents($user_id) {
		$recent = new Recent;
		$now = new DateTime();
		$time = date("Y-m-d H:i:s", $now->getTimestamp());
		$fields = [
			'user_id' => $user_id,
			'time'	  => $time
		];

		$recent->fill($fields);
		$recent->save();
	}

	public static function writeRecentsByUser($user_id) {
		$recent = new Recent;
		$recent = $recent->where('user_id', $user_id);
		$recent = $recent->first();
 		$item_code = Input::get('item_code');

		$fields = [
			'first'  => $item_code,
			'second' => $recent->first,
			'third'  => $recent->second,
			'fourth' => $recent->third
		];

		$recent->fill($fields);
		$recent->save();
	}
}