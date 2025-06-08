<?php 

namespace App\Domain\Repository;
use Validator;
use  App\Models\Product;
class CreateProduct{
    public string $name;
    public float $price;
    public ?string $img;

    
    public function __construct(array $data){
        $this->name = $data["name"];
        $this->price = $data["price"];
        $this->img = $data["img"];
    }
    public static function CreateProduct( array $data){
     $validate = Validator::make($data,[
            'name' => 'required|min:5',
            'price' => 'required',
             'img' => 'nullable'
        ]); 
        if ($validate->fails()) {   
          return view('index');
         }
     $data = $validate->validated();    
        Product::Create($data);
    }


}