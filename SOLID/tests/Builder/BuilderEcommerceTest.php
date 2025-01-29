<?php

namespace StandardsDemo\Solid\Tests\Builder;

use PHPUnit\Framework\TestCase;
use StandardsDemo\Solid\Builder\Ecommerce\Order\EcommerceOrderBuilder;

class BuilderEcommerceTest extends TestCase
{
    public function testBuildOrder()
    {
        $builder = new EcommerceOrderBuilder();
        $order = $builder->setCustomer('John Doe')
            ->addItem('Laptop')
            ->addItem('Mouse')
            ->setShippingAddress('123 Main St')
            ->getOrder();

        $this->assertEquals('John Doe', $order->customer);
        $this->assertEquals(['Laptop', 'Mouse'], $order->items);
        $this->assertEquals('123 Main St', $order->shippingAddress);
    }
}