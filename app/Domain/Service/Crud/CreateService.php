<?php


namespace App\Domain\Service\Crud;
use App\Interface\CreateInterface;

use App\Domain\Service\Crud\IndexService;
use App\Domain\Repository\CreateProduct;
use Exception;
class CreateService implements CreateInterface{

    protected $product;

    public function Create ($product){
        try{
            CreateProduct::CreateProduct($product);
            
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

