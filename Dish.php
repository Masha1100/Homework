<?php
require_once 'Ingredients.php';

class Dish extends Ingredient
{
	public $name;
	protected $ingredients=array();
	public function __construct()
	{
		foreach ($this->ingredients as $ingredient) {
			if ($ingredient instanceof Ingredient)
		$this->ingredients[] = $ingredient;
		}
	}

		

	public function total_cost()
	{
		$total_cost = 0;
		foreach($this->ingredients as $ingredient) {
		$total_cost += $ingredient->get_cost();
	}
		return $total_cost;
	}


		public function set_name()
	{
		return $this->name = $name;
	}

}

$ingredients = [$potato, $chicken, $water, $salt];
$soup = new Dish($ingredients);
$soup->set_name('Суп');
var_dump($soup);

     $soup = $soup->total_cost();
     echo 'Total cost' . $total_cost;

$ingredients = [$potato, $chicken, $oil, $salt];
$potato_chicken = new Dish($ingredients);
$potato_chicken->set_name('Суп');
var_dump($potato_chicken);

     $potato_chicken = $potato_chicken->total_cost();
     echo 'Total cost' . $total_cost;