<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = ['id','name','price','img'];

    public function product(){

        return $this->belongsTo(Categories::class);
    }
}
