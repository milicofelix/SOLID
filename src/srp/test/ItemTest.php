<?php

use PHPUnit\Framework\TestCase;
use Solid\srp\Item;

class ItemTest extends TestCase {

    // private $item;
    // public function __construct() {
    //     $this->item = new Item();
    // }
    public function testInitStateItem() {
        $item = new Item();
        $this->assertEquals('', $item->getDescription());
        $this->assertEquals(0, $item->getvalue());
    }

    public function testGetAndSetDescription() {
        $description = 'Playstation 4';
        $item = new Item();
        $item->setDescription($description);
        $this->assertEquals($description, $item->getDescription());
    }

    /**
     * @dataProvider dataValues
     */
    public function testGetAndSetValue($value) {
        //$value = 4500.00;
        $item = new Item();
        $item->setValue($value);
        $this->assertEquals($value, $item->getValue());
    }

    /**
     * @dataProvider dataValues
     */
    public function testValidItem($value) {
        $description = 'Playstation 4';
        //$value = 4500.00;
        $item = new Item();
        $item->setDescription($description);
        $item->setValue($value);
        $this->assertEquals(true, $item->validItem());
    }

    public function dataValues() {
        return [
            [100],
            [12],
            [10],
            [5],
        ];
    }

}