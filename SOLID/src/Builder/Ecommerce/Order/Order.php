<?php

namespace StandardsDemo\Solid\Builder\Ecommerce\Order;

class Order
{
    public array $items = [];
    public string $customer;
    public string $shippingAddress;

    public function display(): void
    {
        echo "Order for {$this->customer} with " . \count($this->items) . " items shipped to {$this->shippingAddress}.";
    }
}