<?php

namespace StandardsDemo\Solid\Facade\OrderProcessing\Order;

class OrderFacade
{
    public function __construct(
        private Inventory $inventory = new Inventory(),
        private PaymentProcessor $paymentProcessor = new PaymentProcessor(),
        private Shipping $shipping = new Shipping(),
    ) {}

    public function placeOrder(string $item, float $amount, string $address): void
    {
        if (!$this->inventory->checkStock($item)) {
            echo "Item is out of stock.";
            return;
        }

        echo $this->paymentProcessor->processPayment($amount) . PHP_EOL;
        echo $this->shipping->arrangeShipping($address) . PHP_EOL;
        echo "Order placed successfully!";
    }
}