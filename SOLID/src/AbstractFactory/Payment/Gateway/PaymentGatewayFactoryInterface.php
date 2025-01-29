<?php

namespace StandardsDemo\Solid\AbstractFactory\Payment\Gateway;

interface PaymentGatewayFactoryInterface
{
    public function createPaymentGateway(): PaymentGatewayInterface;
}