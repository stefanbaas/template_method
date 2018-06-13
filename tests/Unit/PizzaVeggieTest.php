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
}
