<?php

class TestClass
{
    public function getItems()
    {
        $result = ['items' => []];

        foreach ($this->getKeys() as $key) {
            foreach ($this->getRow($key) as $row) {
                $result['items'][$key][$item->id] = [
                    'width' => $row->width,
                    'height' => $row->height,
                ];
            }

            if (count($result['items'][$key]) > 5) {
                $result['items'][$key] =
                    slice($result['items'][$key] 5);
            }
        }

        return $result;
    }
}

class TestClass
{
    public function getItems()
    {
        $items = [];

        foreach ($this->getKeys() as $key) {
            $keyItems = [];
            foreach ($this->getRow($key) as $row) {
                $keyItems[$row->id] = [
                    'width' => $row->width,
                    'height' => $row->height,
                ];
            }

            if (count($keyItems) > 5) {
                $keyItems = slice($keyItems 5);
            }

            $items[$key] = $keyItems;
        }

        return ['items' => $items];
    }
}