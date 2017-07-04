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


class OrderService
{
    private function setShipping($method)
    {
        $order = $this->getValidOrder();
        $order->shipping = $method;
    }

    private function setRecipient(Address $address)
    {
        $order = $this->getValidOrder();
        $order->recipient = $address;
    }

    private function pay()
    {
        $order = $this->getValidOrder();
        $this->paymentService->pay($order);
    }

    private function getValidOrder()
    {
        $order = $this->getOrder();
        if (!$order->isDraft()) {
            throw new Exception('Order is not editable');
        }
        return $order;
    }
}


