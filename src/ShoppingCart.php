<?php

namespace App;

use App\Item;

class ShoppingCart
{
    private array $items;
    private float $total;

    public function __construct()
    {
        $this->items = [];
        $this->total = 0;
    }

    public function addItem(Item $item): void
    {
        $this->items[] = $item;
        $this->total += $item->price();
    }

    public function removeItem(Item $item): void
    {
        $key = array_search($item, $this->items);
        $this->total -= $item->price();
        unset($this->items[$key]);
    }

    public function listItems(): array
    {
        return $this->items;
    }

    public function numberOfItems(): int
    {
       return count($this->items);
    }

    public function getTotal(): float
    {
        return $this->total;
    }
}
