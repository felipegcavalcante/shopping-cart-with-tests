<?php

namespace App;

use PHPUnit\Framework\TestCase;
use InvalidArgumentException;

class ProductTest extends TestCase
{
    public function test_create_product_with_invalid_price(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("O preço deve ser maior que 10 centavos!");

        $p1 = new Product(1, "Bolacha Trakinas", 0);
    }

    public function test_create_product_with_invalid_id(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("O ID deve ser inteiro e positivo!");

        $p1 = new Product(0, "Bolacha Trakinas", 1.50);
    }
}
