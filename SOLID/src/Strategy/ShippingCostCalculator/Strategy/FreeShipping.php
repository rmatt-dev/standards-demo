<?php

namespace StandardsDemo\Solid\Strategy\ShippingCostCalculator\Strategy;

class FreeShipping implements ShippingStrategyInterface
{
    public function calculate(float $weight): float
    {
        return 0;
    }
}