<?php

namespace StandardsDemo\Solid\Strategy\ShippingCostCalculator\Strategy;

interface ShippingStrategyInterface
{
    public function calculate(float $weight): float;
}