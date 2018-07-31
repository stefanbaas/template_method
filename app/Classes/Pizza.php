<?php

namespace App\Classes;

use App\Interfaces\PizzaInterface;

abstract class Pizza implements PizzaInterface
{
    // These methods must be overridden by the extending subclasses
    abstract public function getMeat() :array;
    abstract public function getCheese() :array;
    abstract public function getVegetables() :array;
    abstract public function getCondiments() :array;

    // Public functions
    public function getPizzaDough() :string
    {
        return "Added pizza dough";
    }

    public function bakeThePizza() :string
    {
        return "Bake the pizza";
    }

    public function wrapThePizza() :string
    {
        return "Wrap the pizza";
    }

    final public function makePizza() :array
    {
        $aActions = [];

        // Add pizza dough
        $aActions[] = $this->getPizzaDough();

        // Add condiments
        $aCondiments = $this->getCondiments();
        if($aCondiments){
            $aActions[] = "Adding the condiments: ".implode(', ',$aCondiments);
        }

        // Add meat
        $aMeat = $this->getMeat();
        if($aMeat){
            $aActions[] = "Adding the meat: ".implode(', ',$aMeat);
        }

        // Add vegetables
        $aVegetables = $this->getVegetables();
        if($aVegetables){
            $aActions[] = "Adding the vegetables: ".implode(', ',$aVegetables);
        }

        // Add cheese
        $aCheese = $this->getCheese();
        if($aCheese){
            $aActions[] = "Adding the cheese: ".implode(', ',$aCheese);
        }

        // Wrap the pizza
        $aActions[] = $this->bakeThePizza();

        // Wrap the pizza
        $aActions[] = $this->wrapThePizza();

        return $aActions;
    }
}