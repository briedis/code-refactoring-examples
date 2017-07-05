<?php

class OrderService
{
    public function process()
    {
        $order = $this->getNextOrder();

        if ($order->payment && $order->payment->isPaid() && (!$order->isSample || $order->itemCount < 4)) {
            $order->complete();
        }
    }
}

class OrderService
{
    public function process()
    {
        $order = $this->getNextOrder();

        $isPaid = $order->payment && $order->payment->isPaid();
        $isValid = !$order->isSample || $order->itemCount < 4;

        if ($isPaid && $isValid) {
            $order->complete();
        }
    }
}