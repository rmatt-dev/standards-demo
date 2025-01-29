<?php

namespace StandardsDemo\Solid\Strategy\ShippingCostCalculator\Strategy;

class ExpressShipping implements ShippingStrategyInterface
{
    public function calculate(float $weight): float
    {
        return $weight * 10;
    }
}