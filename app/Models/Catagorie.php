<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catagorie extends Model
{
    protected $fillable = ['name','desc'];
    public function product (){
        return $this->hasMany(Product::class);
    }
}
