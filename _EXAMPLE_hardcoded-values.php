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