<?php

namespace App\Classes;

abstract class Pizza
{
    abstract function addMeat();
    abstract function addCheese();
    abstract function addVegetables();
    abstract function addCondiments();
}