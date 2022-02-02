<?php

namespace Sajid\UnitConversions\Tests;

use PHPUnit\Framework\TestCase;
use Sajid\UnitConversions\Weight;

class WeightTest extends TestCase
{
    //** @test **//   
    public function test_convert_kilogram_to_lbs()
    {
        $lbs = Weight::fromKilograms(100)->toLbs();
        $this->assertEquals(220.4623, $lbs);
    }
}