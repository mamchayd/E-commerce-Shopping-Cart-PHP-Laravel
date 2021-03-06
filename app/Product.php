<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $casts=['imagePath'=>'array'];
    protected $fillable = ['imagePath','title','description','price'];

    public function cart(){
        return $this->belongsTo(Cart::class,'cart_id','id');
    }
}
