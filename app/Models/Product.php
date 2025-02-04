<?php

namespace App\Models;

class Product
{
    public $id;
    public $name;
    public $price;
    public $stock;

    public function __construct($id, $name, $price, $stock)
    {
        $this->id    = $id;
        $this->name  = $name;
        $this->price = $price;
        $this->stock = $stock;
    }
}