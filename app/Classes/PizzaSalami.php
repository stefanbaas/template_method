<?php

namespace App\Classes;

class PizzaSalami extends Pizza
{
    public function getMeat() :array
    {
        return ["Salami", "Pepperoni"];
    }

    public function getCheese() :array
    {
        return ["Mozzarella"];
    }

    public function getVegetables() :array {
        return [];
    }

    public function getCondiments() :array
    {
        return ["Tomato sauce", "Oil"];
    }
}