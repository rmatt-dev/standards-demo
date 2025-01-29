<?php

namespace StandardsDemo\Solid\Strategy\ShippingCostCalculator;

use StandardsDemo\Solid\Strategy\ShippingCostCalculator\Strategy\ShippingStrategyInterface;

class ShippingCostCalculator
{
    public function __construct(
        private ShippingStrategyInterface $strategy,
    ) {}

    public function calculate(float $weight): float
    {
        return $this->strategy->calculate($weight);
    }
}