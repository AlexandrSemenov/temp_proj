<?php

namespace App\Cart;

class Cart
{
    protected $products_list = [];

    public function addProduct($product)
    {
        $this->products_list[] = $product;
    }

    public function getProduct()
    {
        return $this->products_list;
    }
}