<?php

namespace App\Http\Domain\Service;
use Index;
use App\Models\Products;


class IndexService implements Index{
    private $products;
    public function index()
    {
        $this->products = Products::all();
        return compact('products', 'Products');
    }

};
