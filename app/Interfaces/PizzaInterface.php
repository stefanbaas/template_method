<?php

namespace App\Interfaces;

interface PizzaInterface
{
    public function getMeat() :array;
    public function getCheese() :array;
    public function getVegetables() :array;
    public function getCondiments() :array;
    public function getPizzaDough() :string;
    public function bakeThePizza() :string;
    public function wrapThePizza() :string;
    public function makePizza() :array;
}