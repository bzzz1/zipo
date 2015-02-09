<?php

class Producer extends Eloquent {
	protected $guarded = [];
	public $timestamps = false;
/*------------------------------------------------
| READ
------------------------------------------------*/
	public static function readAllProducers() {
		$producers = [];
		return $producers;
	}
}