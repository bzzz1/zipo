<?php

class Cred extends Eloquent {
	protected $guarded = [];
	public $timestamps = false;

	public static function getCred() {
		$discount = new Cred;
		$discount = $discount->first();
		return $discount;
	}
}