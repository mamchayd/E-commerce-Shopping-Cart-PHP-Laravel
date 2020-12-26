<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;

class CartController extends Controller
{
    public function getIndex(){
        
       $carts= Cart::with('discounts','products')->get();
       // return view('shop.index',['products' => $products]);   
       return $carts;
      }  



}
