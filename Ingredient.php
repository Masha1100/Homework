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

	public function get_name_ing()
	{
		return $this->ingredient;
	}

	public function get_cost()
	{
		return $this->cost;
	}

	public function chandes_cost($cost)
	{
		$this->cost = $cost;
		
	}	

}

