<?php

namespace Tests\Unit;

use App\Classes\Pizza;
use App\Interfaces\PizzaInterface;
use Tests\TestCase;

class PizzaMock extends Pizza
{

    public function getMeat(): array
    {
        return ['Salami', 'Pepperoni'];
    }

    public function getCheese(): array
    {
        return ['Mozzarella'];
    }

    public function getVegetables(): array
    {
        return ['Mushrooms'];
    }

    public function getCondiments(): array
    {
        return ['Tomato sauce'];
    }
}

class PizzaVeggieMock extends Pizza
{

    public function getMeat(): array
    {
        return [];
    }

    public function getCheese(): array
    {
        return ['Mozzarella'];
    }

    public function getVegetables(): array
    {
        return ['Mushrooms', 'Onion'];
    }

    public function getCondiments(): array
    {
        return ['Tomato sauce'];
    }
}

class PizzaTest extends TestCase
{
    protected $mock;
    protected $mock2;

    protected function setUp()
    {
        parent::setUp();
        $this->mock = new PizzaMock();
        $this->mock2 = new PizzaVeggieMock();
    }

    public function testInstantiation () : void
    {
        $this->assertNotNull($this->mock);
    }

    public function testInstanceOf()
    {
        $this->assertInstanceOf(PizzaInterface::class, $this->mock);
    }

    public function testMakePizza()
    {
        $aExpected = [
            "Added pizza dough",
            "Adding the condiments: Tomato sauce",
            "Adding the meat: Salami, Pepperoni",
            "Adding the vegetables: Mushrooms",
            "Adding the cheese: Mozzarella",
            "Bake the pizza",
            "Wrap the pizza"
        ];

        $this->assertEquals($aExpected, $this->mock->makePizza());
    }

    public function testMakeVeggiePizza()
    {
        $aExpected = [
            "Added pizza dough",
            "Adding the condiments: Tomato sauce",
            "Adding the vegetables: Mushrooms, Onion",
            "Adding the cheese: Mozzarella",
            "Bake the pizza",
            "Wrap the pizza"
        ];

        $this->assertEquals($aExpected, $this->mock2->makePizza());
    }

    public function testGetMeat()
    {
        $this->assertEquals(['Salami', 'Pepperoni'], $this->mock->getMeat());
    }

    public function testGetCheese()
    {
        $this->assertEquals(['Mozzarella'], $this->mock->getCheese());
    }

    public function testGetVegetables()
    {
        $this->assertEquals(['Mushrooms'], $this->mock->getVegetables());
    }

    public function testGetCondiments()
    {
        $this->assertEquals(['Tomato sauce'], $this->mock->getCondiments());
    }

    public function testGetPizzaDough()
    {
        $this->assertEquals("Added pizza dough", $this->mock->getPizzaDough());
    }

    public function testBakeThePizza()
    {
        $this->assertEquals("Bake the pizza", $this->mock->bakeThePizza());
    }

    public function testWrapThePizza()
    {
        $this->assertEquals("Wrap the pizza", $this->mock->wrapThePizza());
    }
}
