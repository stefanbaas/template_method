<?php

namespace App\Classes;

class PizzaSculptor
{
    public function init()
    {
        $pizzaSalami = new PizzaSalami();
        var_dump($pizzaSalami->makePizza());

        $pizzaVeggie = new PizzaVeggie();
        var_dump($pizzaVeggie->makePizza());
    }
}