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


}
