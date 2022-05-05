<?php

namespace App;

use InvalidArgumentException;
use App\Product;

class Item
{
    public Product $product;
    public int $quantity;
    public float $discount;

    public function __construct(Product $product, int $quantity, float $discount)
    {
        if ($quantity <= 0) {
            throw new InvalidArgumentException("A quantidade deve ser um valor positivo!", 1);
        }

        if ($product->price() * $quantity <= $discount) {
            throw new InvalidArgumentException("O desconto deve ser menor que o valor total!", 1);
        }

        $this->product = $product;
        $this->quantity = $quantity;
        $this->discount = $discount;
    }

    public function price(): float
    {
        return $this->product->price() * $this->quantity - $this->discount;
    }
}
