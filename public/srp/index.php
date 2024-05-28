<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "../../vendor/autoload.php";
echo "<h1>Single Responsibility Principle</h1>";

use Solid\srp\ShoppingCart;
use Solid\srp\Item;
use Solid\srp\Order;
use Solid\srp\EmailService;

$cart1 = new ShoppingCart();
$order = new Order();
$item1 = new Item();
$item2 = new Item();

$item1->setDescription('Bicicleta Caloy Aro 20');
$item1->setValue(900.00);

$item2->setDescription('Playstation 5');
$item2->setValue(4500.00);


$order->getShoppingCart()->addItems($item1);
$order->getShoppingCart()->addItems($item2);
echo "<pre>";
print_r($order->getShoppingCart()->getItems());

echo "<h4 style='font-size:3em'>Valor total do pedido</h4>";
$total = 0;
foreach($order->getShoppingCart()->getItems() as $key => $item) {
    $total += $item->getValue();
}

echo "<h5 style='font-size:2em'>R$ ".number_format($total,2,',','.')."</h5>";

echo "<p>Status do Pedido: ". $order->getStatus()."</p>";
echo "<p>Confirmar Pedido: ". $order->confirm()."</p>";
echo "<p>Status do Pedido: ". $order->getStatus()."</p>";
if($order->confirm()) {
    echo "<p>Envio de E-mail: ".  EmailService::sendMail()."</p>";
}
echo "<h3>Valida item</h3>";
echo $item1->validItem();
