<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Cred extends Eloquent implements UserInterface, RemindableInterface{
	use UserTrait, RemindableTrait;
	protected $guarded = [];
	public $timestamps = false;

	public static function getCred() {
		$discount = new Cred;
		$discount = $discount->first();
		return $discount;
	}
}