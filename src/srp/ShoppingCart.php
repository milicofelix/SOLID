<?php

namespace Solid\srp;

use Solid\srp\Item;

class ShoppingCart {
    
    private $items;

    public function __construct() {
        $this->items = [];
    }

    public function getItems() {
        return $this->items;
    }

    public function addItems(Item $item) {
        array_push($this->items, $item);
        return true;
    }

    public function ItemValidate() {
        return count($this->items) > 0;
    }
}