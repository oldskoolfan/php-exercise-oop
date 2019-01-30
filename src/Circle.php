<?php

class Circle extends Shape 
{
	const SHAPE_TYPE = 3;
	protected $radius;

	public function __construct($radius) 
	{
		/**
		 * the exercise reminds you to call the parent constructor, but doesn't
		 * really explain how. the Shape constructor requires two parameters,
		 * and since we don't need length or width for circle area, we can pass
		 * null for both here and not worry about it.
		 */
		parent::__construct(null, null);
		$this->radius = $radius;
	}

	public function area()
	{
		/**
		 * see https://www.w3schools.com/php/func_math_pi.asp
		 * and https://www.w3schools.com/php/func_math_pow.asp
		 * for more about what pi() and pow() do, but essentially
		 * pi() returns the value of pi and pow() raises the first argument
		 * to the power of the second argument.
		 * (Note: I had to look both of these up myself)
		 */
		return pi() * pow($this->radius, 2);
	}

	public function getFullDescription()
	{
		// use static:: instead of self:: here for a late static binding
		// see http://php.net/manual/en/language.oop5.static.php
		$className = static::class;

		/**
		 * we have to call the getter method for $id here because id 
		 * is a private property and we overrode getFullDescription(),
		 * so we no longer have access :(
		 */
		$id = $this->getId();

		return "$className<#$id>: $this->name - $this->radius";
	}
}