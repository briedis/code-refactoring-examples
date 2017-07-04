<?php

class OrderService
{
    public function createOrder($isSample)
    {
        $order = $this->getNewOrder();
        $order->user = $this->getUser();

        if ($isSample) {
            if ($order->itemCount > 5) {
                throw new Exception('Too many items');
            }
            $order->isSample = true;
            $order->discount = 20;
            $order->title = 'Sample order #' . $this->getNextId();
        } else {
            $order->title = 'Order #' . $this->getNextId();
        }

        return $order;
    }
}

$sampleOrder = (new OrderService)->createOrder(true);
$normalOrder = (new OrderService)->createOrder(false);


class OrderService
{
    public function createRegularOrder()
    {
        $order = $this->prepareNewOrder();
        if ($order->itemCount > 5) {
            throw new Exception('Too many items');
        }

        $order->isSample = true;
        $order->discount = 20;
        $order->title = 'Sample order #' . $this->getNextId();

        return $order;
    }

    public function createSampleOrder()
    {
        $order = $this->prepareNewOrder();
        $order->title = 'Order #' . $this->getNextId();

        return $order;
    }

    private function prepareNewOrder()
    {
        $order = $this->getNewOrder();
        $order->user = $this->getUser();

        return $order;
    }
}

class OrderService
{
    public function createRegularOrder()
    {
        return $this->createOrder(false)
    }

    public function createSampleOrder()
    {
        return $this->createOrder(true)
    }

    private function createOrder($isSample)
    {
        // Messy logic goes here
    }
}


