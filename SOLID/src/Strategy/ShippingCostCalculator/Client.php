<?php

namespace StandardsDemo\Solid\Strategy\ShippingCostCalculator;

use StandardsDemo\Solid\Strategy\ShippingCostCalculator\Strategy\ExpressShipping;
use StandardsDemo\Solid\Strategy\ShippingCostCalculator\Strategy\FreeShipping;
use StandardsDemo\Solid\Strategy\ShippingCostCalculator\Strategy\StandardShipping;

class Client
{
    public function calculateShipping(): void
    {
        $calculator = new ShippingCostCalculator(new StandardShipping());
        echo "Standard: " . $calculator->calculate(10) . PHP_EOL;

        $calculator = new ShippingCostCalculator(new ExpressShipping());
        echo "Express: " . $calculator->calculate(10) . PHP_EOL;

        $calculator = new ShippingCostCalculator(new FreeShipping());
        echo "Free: " . $calculator->calculate(10) . PHP_EOL;
    }
}

$client = new Client();
$client->calculateShipping();