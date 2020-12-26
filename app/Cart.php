<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
   
    
    protected $casts=['discounts'=>'Discount','content'=>'array','products'=>'Product' ];
    protected $fillable = ['content','quantity'];
        
    public function discounts(){
      return $this->hasMany(Discount::class,'cart_id','id');
    }

    public function products()
    {
      return $this->hasMany(Product::class,'cart_id','id');
      }
 }
