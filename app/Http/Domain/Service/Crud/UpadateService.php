<?php


namespace App\Http\Domain\Services;

use Update;
use App\Models\Products;
class UpadateService implements Update{

    private $products;

    public function Update($products)
    {

      $this->products = $products;
      $validetor = $this->products->validator([
            'name' => 'required|min:5',
            'price' => 'required',
            'img' => 'required'
        ]);
      $id =  Products::where('id',$products->id);   
      $id->name = $validetor['name'];
      $id->price = $validetor['price'];
      $id->img = $validetor['img'];
    
    }
}