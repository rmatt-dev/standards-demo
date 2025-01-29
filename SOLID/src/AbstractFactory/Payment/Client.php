<?php

namespace StandardsDemo\Solid\AbstractFactory\Payment;

use StandardsDemo\Solid\AbstractFactory\Payment\Gateway\PaymentGatewayFactoryInterface;
use StandardsDemo\Solid\AbstractFactory\Payment\Gateway\PayPalFactory;
use StandardsDemo\Solid\AbstractFactory\Payment\Gateway\StripeFactory;

class Client
{
    public function processOrder(PaymentGatewayFactoryInterface $factory, $amount): void
    {
        $gateway = $factory->createPaymentGateway();
        echo $gateway->processPayment($amount);
    }
}

$client = new Client();
$client->processOrder(new PayPalFactory(), 100.0);
$client->processOrder(new StripeFactory(), 100.0);
