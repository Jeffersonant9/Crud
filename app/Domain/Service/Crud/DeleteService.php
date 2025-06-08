<?php

 
namespace  App\Domain\Service\Crud;

use App\Interface\DeleteInterface;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Exception;

class DeleteService implements DeleteInterface {
    private $products;
        public function delete($data)
    {
        try {
        
            $validate = Validator::make($data, [
                'id' => 'required|integer|exists:products,id'
            ]);

            if ($validate->fails()) {
                return redirect()->back()->withErrors($validate);
            }

            Product::destroy($data['id']);

    

        
            return IndexService::index();

        } catch (Exception $err) {
            return view('welcome')->with('error', $err->getMessage());
        }
    
    }


}