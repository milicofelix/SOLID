<?php

namespace Solid\srp;
use Solid\srp\ShoppingCart;

class Order {

    private $status;
    private $shoppingCart;
    private $orderValue;

    public function __construct() {
        $this->status = "Aberto";
        $this->shoppingCart = new ShoppingCart();
        $this->orderValue = 0;
    }


    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    public function getShoppingCart() {
        return $this->shoppingCart;
    }

    public function confirm() {
        if($this->getShoppingCart()->ItemValidate()) {
            $this->setStatus('confirmado!');
            return true;
        }

        return false;
    }
}