<?php

class OrderService
{
    public function process($order) {
        if ($order->status !== 'fulfilled') {
            $order->status = 'fulfilled';
            $order->save();
        }
    }

    public function getFulfilledOrder() {
        return $this->getByStatus('fulfilled');
    }
}

class OrderService
{
    const FULFILLED = 'fulfilled';

    public function process($order) {
        if ($order->status !== self::FULFILLED) {
            $order->status = self::FULFILLED;
            $order->save();
        }
    }

    public function getFulfilledOrder() {
        return $this->getByStatus(self::FULFILLED);
    }
}
