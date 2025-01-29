<?php

namespace StandardsDemo\Solid\AbstractFactory\Payment\Gateway;

class PayPalFactory implements PaymentGatewayFactoryInterface
{
    public function createPaymentGateway(): PaymentGatewayInterface
    {
        return new PayPalGateway();
    }
}