<?php

class Ingredient
{
	protected $ingredient;
	protected $cost;

	public function __construct($ingredient, $cost)
	{
		$this->ingredient = $ingredient;
		$this->cost = $cost;
	}

	public function getName()
	{
		return $this->ingredient;
	}

	public function getCost()
	{
		return $this->cost;
	}

	public function setCost($cost)
	{
		$this->cost = $cost;
		
	}	
}
