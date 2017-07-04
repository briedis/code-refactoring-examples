<?php

class OrderService
{
    function complete() {
        $this->validate();
        $this->pay();
        $this->notify();
    }

    function validate() {
        $this->checkAddress();
    }

    function checkAddress() {
        // Validate address
    }

    function pay() {
        // Make a transaction
    }

    function notify() {
        // Send e-mail
    }
}

