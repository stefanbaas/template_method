<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PizzaTest extends TestCase
{
    protected $sut;

    protected function setUp()
    {
        parent::setUp();
        $this->sut = $this->getMockForAbstractClass('App\Classes\Pizza');
    }

    public function testInstantiation () : void
    {
        $this->assertNotNull($this->sut);
    }

    public function testAddMeat()
    {
        $this->sut->expects($this->any())
            ->method('addMeat')
            ->will($this->returnValue(TRUE));

        $this->assertTrue($this->sut->addMeat());
    }

    public function testAddCheese()
    {
        $this->sut->expects($this->any())
            ->method('addCheese')
            ->will($this->returnValue(TRUE));

        $this->assertTrue($this->sut->addCheese());
    }

    public function testAddVegetables()
    {
        $this->sut->expects($this->any())
            ->method('addVegetables')
            ->will($this->returnValue(TRUE));

        $this->assertTrue($this->sut->addVegetables());
    }

    public function testAddCondiments()
    {
        $this->sut->expects($this->any())
            ->method('addCondiments')
            ->will($this->returnValue(TRUE));

        $this->assertTrue($this->sut->addCondiments());
    }

    public function testAddPizzaDough()
    {
        $this->assertTrue(is_string($this->sut->addPizzaDough()));
    }

    public function testWrapThePizza()
    {
        $this->assertTrue(is_string($this->sut->wrapThePizza()));
    }

    public function testCustomerWantsMeat()
    {
        $this->assertTrue($this->sut->customerWantsMeat);
    }

    public function testCustomerWantsCheese()
    {
        $this->assertTrue($this->sut->customerWantsMeat);
    }

    public function testCustomerWantsVegetables()
    {
        $this->assertTrue($this->sut->customerWantsMeat);
    }

    public function testCustomerWantsCondiments()
    {
        $this->assertTrue($this->sut->customerWantsMeat);
    }

    public function testMakePizza()
    {
        $this->assertTrue(is_array($this->sut->makePizza()));
    }
}
