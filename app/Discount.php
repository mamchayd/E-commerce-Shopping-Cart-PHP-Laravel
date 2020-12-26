<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    
    protected $fillable = ['code','value'];

    public function cart(){
        return $this->belongsTo(Cart::class,'cart_id','id');
    }
}
