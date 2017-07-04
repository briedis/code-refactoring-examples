<?php

class OrderService
{
    public function calculateAmounts(OrderModel $order)
    {
        $order->total = $this->calculateTotal($order);
        $order->tax = $order->total * 0.075;
    }
}

class OrderService
{
    const TAX_RATE = 0.075;

    public function calculateAmounts(OrderModel $order)
    {
        $order->total = $this->calculateTotal($order);
        $order->tax = $order->total * self::TAX_RATE;
    }
}

