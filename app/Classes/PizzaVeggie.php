<?php

namespace App\Classes;

class PizzaVeggie extends Pizza
{
    public function getMeat() :array {
        return [];
    }

    public function getCheese() :array
    {
        return ["Mozzarella"];
    }

    public function getVegetables() :array
    {
        return ["Mushrooms", "Artichoke", "Onion", "Peppers", "Olives"];
    }

    public function getCondiments() :array
    {
        return ["Tomato sauce", "Oil"];
    }
}