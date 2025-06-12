<?php


namespace App\Domain\Service\Crud;

use App\Domain\Service\Crud\IndexService;
use App\Domain\Repository\CreateProdutcRepo;
use Exception;
class CreateService {

    protected $product;

    public function Create ($product){
        try{
            
            $class = New CreateProdutcRepo($product);
            $class->Create($product);


            if (isset($product['img']) ){
                $image = $product->file('img');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->storeAs('public/imgs', $imageName);

            }
    
           return IndexService::index();
        } catch(Exception $err){

                return IndexService::index();
        }
       
    }

}

