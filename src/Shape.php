<?php

class Shape 
{
	const SHAPE_TYPE = 1;
	public $name;
	protected $length;
	protected $width;
	private $id;

	public function __construct($length, $width) 
	{
		$this->length = $length;
		$this->width = $width;
		$this->id = uniqid();
	}

	public function getName() 
	{ 
		return $this->name; 
	}

	public function setName($name) 
	{ 
		$this->name = $name; 
	}

	public function getId() 
	{
		return $this->id;
	}

	public function area()
	{
		return $this->length * $this->width;
	}

	public static function getTypeDescription()
	{
		// use static:: instead of self:: here for a late static binding
		// see http://php.net/manual/en/language.oop5.static.php
		return 'Type: ' . static::SHAPE_TYPE;
	}

	public function getFullDescription()
	{
		/**
		 * see above comment re: static vs self.
		 * the exercise doesn't make it clear that you need to get the class
		 * name for the string output, instead of hardcoding "Shape"/"Rectangle"
		 */
		$className = static::class;
		
		return "$className<#$this->id>: $this->name - $this->length x $this->width";
	}
}