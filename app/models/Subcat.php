<?php

class Subcat extends Eloquent {
	protected $guarded = [];
	public $timestamps = false;
/*------------------------------------------------
| READ
------------------------------------------------*/
	public static function readAllSubcats() {
		$subcat = [];
		return $subcat;
	}
}