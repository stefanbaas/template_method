<?php

namespace App\Classes;

class PizzaSalami extends Pizza
{
    private $meatUsed = ["Salami", "Pepperoni"];
    private $cheeseUsed = ["Mozzarella"];
    private $condimentsUsed = ["Tomato sauce", "Oil"];

    public $customerWantsVegetables = false;

    function addMeat()
    {
        return "Adding the Meat: ".implode(', ', $this->meatUsed);
    }

    function addCheese()
    {
        return "Adding the cheese: ".implode(', ', $this->cheeseUsed);
    }

    function addVegetables() {}

    function addCondiments()
    {
        return "Adding the condiments: ".implode(', ', $this->condimentsUsed);
    }
}