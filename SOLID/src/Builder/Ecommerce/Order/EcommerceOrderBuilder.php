<?php

namespace StandardsDemo\Solid\Builder\Ecommerce\Order;

class EcommerceOrderBuilder implements OrderBuilderInterface
{
    private Order $order;

    public function __construct()
    {
        $this->order = new Order();
    }

    public function setCustomer(string $customer): self
    {
        $this->order->customer = $customer;
        return $this;
    }

    public function addItem(string $item): self
    {
        $this->order->items[] = $item;
        return $this;
    }

    public function setShippingAddress(string $address): self
    {
        $this->order->shippingAddress = $address;
        return $this;
    }

    public function getOrder(): Order
    {
        return $this->order;
    }
}