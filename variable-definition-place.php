<?php

class TestClass
{
    public function process() {
        $user = $this->getUser();
        $items = $this->getItems();

        $this->log(Processing::STARTED, $user);

        $user->notify(function ($message) {
            $message->text('Processing started');
        });

        foreach ($items as $v) {
            $v->markAsCompleted();
        }
    }
}

class TestClass
{
    public function process() {
        $this->log(Processing::STARTED, $user);

        $user = $this->getUser();
        $user->notify(function ($message) {
            $message->text('Processing started');
        });

        $items = $this->getItems();
        foreach ($items as $v) {
            $v->markAsCompleted();
        }
    }
}

