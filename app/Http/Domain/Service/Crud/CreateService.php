<?php


namespace App\Http\Domain\Services;
use Create;
use  App\Models\Products;
use Exception;

class CreateServices implements Create {

    private $product;

    public function Create ($product){
        try{

            $this->$product = $product;
            $validate = $this->$product->validator([
                'name' => 'required|min:5',
                'price' => 'required',
                'img'
            ]);
            if (isset($validate['img'])){
                $image = $validate->file('img');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->storeAs('public/imgs', $imageName);

            }else{
                $imageName = null;
            }
            Products::create([
                'name' => $validate['name'],
                'price' => $validate['price'],
                'img' => $imageName
            ]);

        } catch(Exception $err){

            return view('welcome');
        }
       
    }

}

