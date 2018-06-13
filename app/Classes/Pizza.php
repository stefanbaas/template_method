<?php

namespace App\Classes;

abstract class Pizza
{
    // hooks
    public $customerWantsMeat = true;
    public $customerWantsCheese = true;
    public $customerWantsVegetables = true;
    public $customerWantsCondiments = true;

    // These methods must be overridden by the extending subclasses
    abstract function addMeat();
    abstract function addCheese();
    abstract function addVegetables();
    abstract function addCondiments();

    // Public functions
    public function addPizzaDough()
    {
        return "Added pizza dough";
    }

    public function bakeThePizza()
    {
        return "Bake the pizza";
    }

    public function wrapThePizza()
    {
        return "Wrap the pizza";
    }

    public function makePizza()
    {
        $aActions = [];

        // Add pizza dough
        $aActions[] = $this->addPizzaDough();

        // Add condiments
        if($this->customerWantsCondiments){
            $aActions[] = $this->addCondiments();
        }

        // Add meat
        if($this->customerWantsMeat){
            $aActions[] = $this->addMeat();
        }

        // Add vegetables
        if($this->customerWantsVegetables){
            $aActions[] = $this->addVegetables();
        }

        // Add cheese
        if($this->customerWantsCheese){
            $aActions[] = $this->addCheese();
        }

        // Wrap the pizza
        $aActions[] = $this->bakeThePizza();

        // Wrap the pizza
        $aActions[] = $this->wrapThePizza();

        return $aActions;
    }
}