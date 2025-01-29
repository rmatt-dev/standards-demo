<?php

namespace StandardsDemo\Solid\Strategy\ShippingCostCalculator\Strategy;

class StandardShipping implements ShippingStrategyInterface
{
    public function calculate(float $weight): float
    {
        return $weight * 5;
    }
}