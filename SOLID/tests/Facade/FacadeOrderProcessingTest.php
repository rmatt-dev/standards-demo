<?php

namespace StandardsDemo\Solid\Tests\Facade;

use PHPUnit\Framework\TestCase;
use StandardsDemo\Solid\Facade\OrderProcessing\Order\OrderFacade;

class FacadeOrderProcessingTest extends TestCase
{
    public function testOrderFacade()
    {
        $orderFacade = new OrderFacade();
        $this->expectOutputString(
            "Payment of 1000 processed.\nShipping arranged to 123 Main St.\nOrder placed successfully!"
        );

        $orderFacade->placeOrder("Laptop", 1000, "123 Main St");
    }
}