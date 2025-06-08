<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Catagorie;
class Product extends Model
{
    use HasFactory;
    protected $fillable = ['id','name','price','img'];
    
    public function Product(){

        return $this->belongsTo(Catagorie::class);
    }
}
