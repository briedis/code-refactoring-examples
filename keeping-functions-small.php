<?php

class OrderService
{
    public function complete()
    {
        $order = $this->getOrder();

        foreach ($order->items as $item) {
            $shipment = $this->newShipment();
            $shipment->addItem($item);
            $shipment->save();

            $product = $item->product;
            $product->stock -= $item->quantity;
            $product->updatedat = time();
            $product->save();
        }

        $order->status = Order::STATUS_PROCESSING;
        $order->save();
    }
}


class OrderService
{
    public function complete() {
        $order = $this->getOrder();

        foreach ($order->items as $item) {
            $this->createShipment($item);
            $this->updateStock($item);
        }

        $this->markOrderAsStarted($order);
    }

    private function createShipment($item);
    private function updateStock($item);
    private function markOrderAsStarted($order);
}

