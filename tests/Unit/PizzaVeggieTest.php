<?php

namespace Tests\Unit;

use App\Classes\Pizza;
use App\Classes\PizzaVeggie;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PizzaVeggieTest extends TestCase
{
    protected $sut;

    protected function setUp()
    {
        parent::setUp();
        $this->sut = new PizzaVeggie();
    }

    public function testInstantiation () : void
    {
        $this->assertNotNull($this->sut);
    }

    // See if the PizzaSalami is a Pizza.
    public function testContractBound ()
    {
        $this->assertInstanceOf(Pizza::class, $this->sut);
    }

    public function testAddMeat()
    {
        $this->assertNull($this->sut->addMeat());
    }

    public function testAddCheese()
    {
        $this->assertTrue(is_string($this->sut->addCheese()));
    }

    public function testAddVegetables()
    {
        $this->assertTrue(is_string($this->sut->addVegetables()));
    }

    public function testAddCondiments()
    {
        $this->assertTrue(is_string($this->sut->addCondiments()));
    }
}
