<?php

namespace StandardsDemo\Solid\AbstractFactory\Payment\Gateway;

interface PaymentGatewayInterface
{
    public function processPayment(float $amount): string;
}