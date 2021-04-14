<?php

namespace Webloper\UnitConversions\Tests;

use PHPUnit\Framework\TestCase;
use Webloper\UnitConversions\Weight;

class WeightTest extends TestCase
{
    /** @test */
    public function it_can_convert_kilograms_to_lbs()
    {
        $lbs = Weight::fromKilograms(100)->toLbs();

        $this->assertEquals(220.4623, $lbs);
    }
}
