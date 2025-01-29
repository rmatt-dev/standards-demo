<?php

namespace StandardsDemo\Solid\Facade\OrderProcessing\Order;

class PaymentProcessor
{
    public function processPayment(float $amount): string
    {
        return "Payment of $amount processed.";
    }
}