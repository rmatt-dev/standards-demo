<?php

namespace StandardsDemo\Solid\Facade\OrderProcessing\Order;

class Inventory
{
    public function checkStock(string $item): bool
    {
        return true;
    }
}