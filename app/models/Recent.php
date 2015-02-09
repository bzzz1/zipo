<?php

class Recent extends Eloquent {
	protected $guarded = [];
	public $timestamps = false;
// /*------------------------------------------------
// | READ
// ------------------------------------------------*/
	public static function readAllRecents() {
		$recents = new Recent;
		$recents = $recents->orderBy('time', 'DESC');
		$recents = $recents->get();
		return $recents;
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