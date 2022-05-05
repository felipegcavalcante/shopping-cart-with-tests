<?php

require_once "../vendor/autoload.php";

use App\Product;
use App\Item;
use App\ShoppingCart;

$p1 = new Product(1, "Bolacha Trakinas", 1.50);
$p2 = new Product(2, "Leite Moça", 6.0);

$i1 = new Item($p1, 3, 0.5);
$i2 = new Item($p2, 1, 0.5);

$cart = new ShoppingCart();
$cart->addItem($i1);
$cart->addItem($i2);

echo "<pre>";
    print_r($cart->listItems());
echo "</pre>";
echo "<hr>";

// $cart->removeItem($i2);

echo "<pre>";
    print_r($cart->listItems());
echo "</pre>";
echo "<hr>";

// $cart->numberOfItems();
echo $cart->getTotal();