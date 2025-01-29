<?php

namespace StandardsDemo\Solid\Tests\AbstractFactory;

use PHPUnit\Framework\TestCase;
use StandardsDemo\Solid\AbstractFactory\Payment\Gateway\PayPalFactory;
use StandardsDemo\Solid\AbstractFactory\Payment\Gateway\PayPalGateway;
use StandardsDemo\Solid\AbstractFactory\Payment\Gateway\StripeFactory;
use StandardsDemo\Solid\AbstractFactory\Payment\Gateway\StripeGateway;

class AbstractFactoryPaymentTest extends TestCase
{
    public function testPayPalFactoryCreatesPayPalGateway()
    {
        $factory = new PayPalFactory();
        $gateway = $factory->createPaymentGateway();

        $this->assertInstanceOf(PayPalGateway::class, $gateway);
        $this->assertEquals("Processed 100 using PayPal.", $gateway->processPayment(100));
    }

    public function testStripeFactoryCreatesStripeGateway()
    {
        $factory = new StripeFactory();
        $gateway = $factory->createPaymentGateway();

        $this->assertInstanceOf(StripeGateway::class, $gateway);
        $this->assertEquals("Processed 150 using Stripe.", $gateway->processPayment(150));
    }
}