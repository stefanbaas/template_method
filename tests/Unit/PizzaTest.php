<?php

namespace Tests\Unit;

use App\Classes\Pizza;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PizzaTest extends TestCase
{
    protected $sut;

    protected function setUp()
    {
        parent::setUp();
        $this->sut = new Pizza();
    }

    public function testInstantiation () : void
    {
        $this->assertNotNull($this->sut);
    }
}
