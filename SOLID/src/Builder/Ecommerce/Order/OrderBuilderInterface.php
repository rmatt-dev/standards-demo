<?php

namespace StandardsDemo\Solid\Builder\Ecommerce\Order;

interface OrderBuilderInterface
{
    public function setCustomer(string $customer): self;
    public function addItem(string $item): self;
    public function setShippingAddress(string $address): self;
    public function getOrder(): Order;
}