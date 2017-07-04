<?php

class OrderService
{
    public function process()
    {
        $orders = $this->getOrders();

        foreach ($orders as $order) {
            if ($order->status !== 'fulfilled') {
                $order->status = 'fulfilled';
                $order->save();
            }
        }
    }

    public function getFulfilledOrder()
    {
        return $this->repository->getByStatus('fulfilled');
    }
}

class OrderService
{
    const FULFILLED = 'fulfilled';

    public function process()
    {
        $orders = $this->getOrders();

        foreach ($orders as $order) {
            if ($order->status !== self::FULFILLED) {
                $order->status = self::FULFILLED;
                $order->save();
            }
        }
    }

    public function getFulfilledOrder()
    {
        return $this->repository->getByStatus(self::FULFILLED);
    }
}