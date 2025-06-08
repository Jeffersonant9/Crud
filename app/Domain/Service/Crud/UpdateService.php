<?php


namespace App\Domain\Service\Crud;
use App\Interface\UpdateInterface;
use App\Models\Product;
use Exception;
use Mockery\Expectation;
use Validator;
class UpdateService implements UpdateInterface{

    private $products;

    public function Update($products)
    {
        try{
        $this->products = $products;
                $validetor = Validator::make( $products->all() ,[
                    'name' => 'required|min:5',
                    'price' => 'required',
                    'img' => 'nullable'
                ]);
                
                $data = $validetor->validated();
            return view('welcome');

        }
        catch(Exception $err){


        }

       
      
    }
}