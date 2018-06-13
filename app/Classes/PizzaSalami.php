<?php

namespace App\Classes;

class PizzaSalami extends Pizza
{
    private $meatUsed = ["Salami", "Pepperoni"];
    private $cheeseUsed = ["Mozzarella"];
    private $condimentsUsed = ["Tomato sauce", "Oil"];

    public $customerWantsVegetables = false;

    public function addMeat()
    {
        return "Adding the Meat: ".implode(', ', $this->meatUsed);
    }

    public function addCheese()
    {
        return "Adding the cheese: ".implode(', ', $this->cheeseUsed);
    }

    public function addVegetables() {}

    public function addCondiments()
    {
        return "Adding the condiments: ".implode(', ', $this->condimentsUsed);
    }
}