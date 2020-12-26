<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use Session;

class ProductController extends Controller
{
      public function getIndex(){
        
        $products= Product::all();
       return $products;
      }  

      public function addToCart($id){
            $product = Product::fint($id);
            if(!$product){
                  abort(404);
            }
            $cart = session()->get('cart');
            // if cart is empty then this the first product
            if(!$cart) 
            {
                  $cart = [
                        $id => [
                              'title' => $product->title,
                              'description' => $product->description,
                              'quantity' => 1,
                              'price' => $product->price,
                              'imagePath' => $product->imagePath
                        ]
                  ];
                  session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

            // if cart not empty then check if this product exist then increment quantity
                if(isset($cart[$id])) {
                  $cart[$id]['quantity']++;
                  session()->put('cart', $cart);
                  return redirect()->back()->with('success', 'Product added to cart successfully!');
              }
               // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            'title' => $product->title,
            'description' => $product->description,
            'quantity' => 1,
            'price' => $product->price,
            'imagePath' => $product->imagePath
     
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
  


      }

 
}
