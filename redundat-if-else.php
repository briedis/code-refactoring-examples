<?php

class MyClass
{
    public function doStuff()
    {
        if ($this->isValid()) {
            $status = $this->getValidStatus();
        } else {
            $status = self::STATUS_DRAFT;
        }

        $item = $this->getItemByStatus($status);

        if ($item->isCompleted()) {
            $this->notify();
            $this->export();
            return true;
        } else {
            throw new Exception;
        }
    }
}

class MyClass
{
    public function doStuff()
    {
        $status = self::STATUS_DRAFT;
        if ($this->isValid()) {
            $status = $this->getValidStatus();
        }

        $item = $this->getItemByStatus($status);

        if ($item->isCompleted()) {
            $this->notify();
            $this->export();
            return true;
        }

        throw new Exception;
    }
}
