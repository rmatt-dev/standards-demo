<?php

namespace StandardsDemo\Solid\Facade\OrderProcessing;

use StandardsDemo\Solid\Facade\OrderProcessing\Order\OrderFacade;

class Client
{
    public function placeOrder(): void
    {
        $order = new OrderFacade();
        $order->placeOrder("Laptop", 100.00, "Kolorowa 12");
    }
}

$client = new Client();
$client->placeOrder();