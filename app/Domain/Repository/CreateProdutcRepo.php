<?php 


namespace App\Domain\Repository;

use App\Domain\Interface\CreateInterface;
use Validator;
use  App\Models\Product;
class CreateProdutcRepo  implements CreateInterface  {
    
    public string $name;
    public float $price;
    public ?string $img;

    
    public function __construct(array $data){
        $this->name = $data["name"];
        $this->price = $data["price"];
        $this->img = $data["img"];    
        $this->name = $data["name"];
        $this->price = $data["price"];
        $this->img = $data["img"];
    }


    public function Create($products)
    {
          $validate = Validator::make($products,[
            'name' => 'required|min:5',
            'price' => 'required',
             'img' => 'nullable'
        ]); 
        if ($validate->fails()) {   
          return view('index');
         }
     $data = $validate->validated();    
        Product::Create($products);
    }
}