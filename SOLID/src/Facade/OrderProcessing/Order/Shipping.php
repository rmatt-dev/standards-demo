<?php

namespace StandardsDemo\Solid\Facade\OrderProcessing\Order;

class Shipping
{
    public function arrangeShipping(string $address): string
    {
        return "Shipping arranged to $address.";
    }
}