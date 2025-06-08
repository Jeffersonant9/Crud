<?php

namespace App\Domain\Service\Crud;
use App\Models\Product;

class IndexService {
    static function index()
    {
        $products = Product::all();
        return  view('welcome')->with(compact('products', 'products'));
    }

};
