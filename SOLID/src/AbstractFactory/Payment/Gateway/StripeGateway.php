<?php

namespace StandardsDemo\Solid\AbstractFactory\Payment\Gateway;

class StripeGateway implements PaymentGatewayInterface
{
    public function processPayment(float $amount): string
    {
        return "Processed $amount using Stripe.";
    }
}