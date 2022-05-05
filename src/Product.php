<?php

namespace App;

use InvalidArgumentException;

class Product
{
    public int $id;
    public string $description;
    public float $price;

    public function __construct(int $id, string $description, float $price)
    {
        if ($price <= 0.1) {
            throw new InvalidArgumentException("O preço deve ser maior que 10 centavos!", 1);
        }

        if ($id <= 0) {
            throw new InvalidArgumentException("O ID deve ser inteiro e positivo!", 1);
        }

        $this->id = $id;
        $this->description = $description;
        $this->price = $price;
    }

    public function price(): float
    {
        return $this->price;
    }
}
