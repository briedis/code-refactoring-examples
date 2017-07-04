<?php

class OrderService
{
    public function fixItems($order) {
        // Leave only the first 5 items
        $order->items = array_slice($order->items, 0, 5);
    }
}

class OrderService
{
    public function fixItems($order) {
        // Sample order can contain only 5 items
        $order->items = array_slice($order->items, 0, 5);
    }
}

class OrderService
{
    const MAX_SAMPLE_ITEMS = 5;

    public function limitSampleOrderItems($sampleOrder) {
        $sampleOrder->items = array_slice($sampleOrder->items, 0, self::MAX_SAMPLE_ITEMS);
    }
}


