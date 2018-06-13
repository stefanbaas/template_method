<?php

namespace Tests\Unit;

use App\Classes\Pizza;
use App\Classes\PizzaSalami;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PizzaSalamiTest extends TestCase
{
    protected $sut;

    protected function setUp()
    {
        parent::setUp();
        $this->sut = new PizzaSalami();
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
