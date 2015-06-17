<?php namespace Presenters;

trait PresentableTrait {
	public function __get($property) {
		if ( ! $this->presenter or ! class_exists($this->presenter)) {
			throw new Exception("Please set the $protected property to your presenter path.");
		}

		if (method_exists($this->presenter, $property)) {
			$presenterInstance = new $this->presenter($this);
			return $presenterInstance->{$property}();
		} 

		return $this->getAttribute($property);
	}

	// 	// // singleton pattern
	//  // protected static $presenterInstance;

	// 	// if (! isset(static::$presenterInstance)) {
	// 	// 	static::$presenterInstance = new $this->presenter($this); // $this->presenter($this) === Presenters\Item($this)
	// 	// }

	// 	// return static::$presenterInstance;
}