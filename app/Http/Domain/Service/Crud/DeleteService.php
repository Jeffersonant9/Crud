<?php

 
namespace  App\Http\Domain\Services;
use Delete;
use App\Models\Products;
use Exception;

class DeleteService implements Delete {
    private $products;
    public function Delete($products){


        try{
            $this->products = $products;
            $validate = $this->$products->validator([
            'name' => 'required|min:5',
            'price' => 'required',
            ]);

            Products::destroy($validate);

        }catch(Exception $err){

            return view('welcome');
        }

    }


}