<?php

namespace StandardsDemo\Solid\AbstractFactory\Payment\Gateway;

class StripeFactory implements PaymentGatewayFactoryInterface
{
    public function createPaymentGateway(): PaymentGatewayInterface
    {
        return new StripeGateway();
    }
}