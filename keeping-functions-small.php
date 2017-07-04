<?php

class OrderService
{
    public function complete()
    {
        $order = $this->getOrder();

        foreach ($order->items as $item) {
            $shipment = $this->shipmentService->newShipment();
            $shipment->addItem($item);
            $shipment->status = Shipment::STATUS_PROCESSING;
            $shipment->startedAt = time();
            $shipment->save();

            $product = $item->product;
            $product->stock -= $item->quantity;
            $product->updatedat = time();
            $product->save();
        }

        $message = new OrderMessage;
        $message->email = $order->email;
        $message->subject = 'Order #' . $order->id;
        $message->text = 'Your order is being fulfilled!';
        $this->messageService->send($message);

        $order->status = Order::STATUS_PROCESSING;
        $order->updatedAt = time();
        $order->startedAt = time();
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

        $this->notifyAboutFulfillment($order);
        $this->markOrderAsStarted($order);
    }

    private function createShipment($item) {
        $shipment = $this->shipmentService->newShipment();
        $shipment->addItem($item);
        $shipment->status = Shipment::STATUS_PROCESSING;
        $shipment->startedAt = time();
        $shipment->save();
    }

    private function updateStock($item) {
        $product = $item->product;
        $product->stock -= $item->quantity;
        $product->updatedat = time();
        $product->save();
    }

    private function notifyAboutFulfillment($order) {
        $message = new OrderMessage;
        $message->email = $order->email;
        $message->subject = 'Order #' . $order->id;
        $message->text = 'Your order is being fulfilled!';
        $this->messageService->send($message);
    }

    private function markOrderAsStarted($order) {
        $order->status = Order::STATUS_PROCESSING;
        $order->updatedAt = time();
        $order->startedAt = time();
        $order->save();
    }
}

