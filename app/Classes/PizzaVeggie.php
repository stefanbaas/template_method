<?php

namespace App\Classes;

class PizzaVeggie extends Pizza
{
    private $cheeseUsed = ["Mozzarella"];
    private $veggiesUsed = ["Mushrooms", "Artichoke", "Onion", "Peppers", "Olives"];
    private $condimentsUsed = ["Tomato sauce", "Oil"];

    public $customerWantsMeat = false;

    public function addMeat() {}

    public function addCheese()
    {
        return "Adding the cheese: ".implode(', ', $this->cheeseUsed);
    }

    public function addVegetables()
    {
        return "Adding the vegetables: ".implode(', ', $this->veggiesUsed);
    }

    public function addCondiments()
    {
        return "Adding the condiments: ".implode(', ', $this->condimentsUsed);
    }
}