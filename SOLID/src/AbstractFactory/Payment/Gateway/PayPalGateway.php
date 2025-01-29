<?php

namespace StandardsDemo\Solid\AbstractFactory\Payment\Gateway;

class PayPalGateway implements PaymentGatewayInterface
{
    public function processPayment(float $amount): string
    {
        return "Processed $amount using PayPal.";
    }
}