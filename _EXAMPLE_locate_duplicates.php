<?php

class OrderService
{
    private function setShipping($method)
    {
        $order = $this->getOrder();
        if (!$order->isDraft()) {
            throw new Exception('Order is not editable');
        }

        $order->shipping = $method;
    }

    private function setRecipient(Address $address)
    {
        $order = $this->getOrder();
        if (!$order->isDraft()) {
            throw new Exception('Order is not editable');
        }

        $order->recipient = $address;
    }

    private function pay()
    {
        $order = $this->getOrder();
        if (!$order->isDraft()) {
            throw new Exception('Order is not editable');
        }

        $this->paymentService->pay($order);
    }
}