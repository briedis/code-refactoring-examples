<?php

class OrderServiceOrderingExample
{
    function pay() {
        // Make a transaction
    }

    function notify() {
        // Send e-mail
    }

    function checkAddress() {
        // Validate address
    }

    function complete() {
        $this->validate();
        $this->pay();
        $this->notify();
    }

    function validate() {
        $this->checkAddress();
    }
}

