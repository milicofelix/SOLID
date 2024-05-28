<?php

namespace Solid\Srp;

class Item {

    private $description;
    private $value;

    public function __construct() {
        $this->description = '';
        $this->value = 0;
    }


    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of value
     */ 
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set the value of value
     *
     * @return  self
     */ 
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    public function validItem() {
        if(empty($this->description) || $this->value <= 0) {
            return false;
        } 
        return true;
    }
}