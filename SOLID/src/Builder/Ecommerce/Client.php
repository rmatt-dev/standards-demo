<?php

namespace StandardsDemo\Solid\Builder\Ecommerce;

use StandardsDemo\Solid\Builder\Ecommerce\Order\EcommerceOrderBuilder;

class Client
{
    public function show(): void
    {
        $builder = new EcommerceOrderBuilder();
        $order = $builder
            ->setCustomer('Jan Kowalski')
            ->addItem('Klawiatura')
            ->setShippingAddress('Kolorowa 12')
            ->getOrder()
        ;

        $order->display();
    }
}