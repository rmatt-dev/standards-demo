<?php

namespace StandardsDemo\Solid\Tests\Strategy;

use PHPUnit\Framework\TestCase;
use StandardsDemo\Solid\Strategy\ShippingCostCalculator\Strategy\ExpressShipping;
use StandardsDemo\Solid\Strategy\ShippingCostCalculator\Strategy\FreeShipping;
use StandardsDemo\Solid\Strategy\ShippingCostCalculator\Strategy\StandardShipping;

class StrategyShippingCostCalculatorTest extends TestCase
{
    public function testStandardShipping()
    {
        $strategy = new StandardShipping();
        $this->assertEquals(50, $strategy->calculate(10));
    }

    public function testExpressShipping()
    {
        $strategy = new ExpressShipping();
        $this->assertEquals(100, $strategy->calculate(10));
    }

    public function testFreeShipping()
    {
        $strategy = new FreeShipping();
        $this->assertEquals(0, $strategy->calculate(10));
    }
}