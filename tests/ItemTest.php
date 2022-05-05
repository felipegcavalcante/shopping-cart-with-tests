<?php

namespace App;

use PHPUnit\Framework\TestCase;
use InvalidArgumentException;

class ItemTest extends TestCase
{
    public function test_create_item_with_invalid_quantity(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("A quantidade deve ser um valor positivo!");

        $p1 = new Product(1, "Bolacha Trakinas", 1.50);
        $i1 = new Item($p1, 0, 0.5);
    }

    public function test_create_item_when_discount_is_greater_than_price(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("O desconto deve ser menor que o valor total!");

        $p1 = new Product(1, "Bolacha Trakinas", 1.50);
        $i1 = new Item($p1, 1, 5);
    }
}
