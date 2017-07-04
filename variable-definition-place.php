<?php

class TestClass
{
    public function process()
    {
        $user = $this->getUser();
        $user->notify(function($message){
            $message->text('Processing started');
        });

        $this->logger()->log(Processing::STARTED, $user);

        $items = $this->getItems();
        foreach ($items as $v) {
            $v->markAsCompleted();
        }

        $methods = $this->getAvailableMethods();
        foreach ($methods as $v) {
            if ($v->canBeUsed()) {
                $this->useMethod($v);
            }
        }
    }

}