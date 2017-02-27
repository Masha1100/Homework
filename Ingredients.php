<?php

class Ingredient
{
	public $name;
	public $cost;

	
	public function set_name($name)
	{
		return $this->name=$name;
	}

	public function get_cost($cost)
	{
		return $this->cost=$cost;
	}
}

$potato = new Ingredient;
$potato->set_name('Картошка');
$potato->get_cost(2.5);
$chicken = new Ingredient;
$chicken->set_name('Курица');
$chicken->get_cost(5.0);
$water = new Ingredient;
$water->set_name('Вода');
$water->get_cost(0.5);
$salt = new Ingredient;
$salt->set_name('Соль');
$salt->get_cost(0.3);
$oil = new Ingredient;
$oil->set_name ('Масло');
$oil -> get_cost(1.0);
