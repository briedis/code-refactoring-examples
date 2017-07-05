<?php

class OrderManager
{
    public function createDraft();
    public function submit();
    public function getOrders();
    public function createShipments();
    public function markShipmentAsDone();
    public function charge();
    public function createTransaction();
    public function refund();
    public function getOrderItemsToFulfill();
    public function fulfillOrderItem();
}


class OrderService {
    public function createDraft();
    public function submit();
    public function get();
}

class ShipmentService {
    public function create();
    public function markAsDone();
}

class PaymentService {
    public function charge();
    public function createTransaction();
    public function refund();
}

class FulfillmentService {
    public function getPendingItems();
    public function markItemAsFulfilled();
}


