<?php

namespace App\Classes;

abstract class Pizza
{

    // These methods must be overridden by the extending subclasses
    abstract function addMeat();
    abstract function addCheese();
    abstract function addVegetables();
    abstract function addCondiments();

    public function addPizzaDough()
    {
        return "Added pizza dough\n";
    }
}