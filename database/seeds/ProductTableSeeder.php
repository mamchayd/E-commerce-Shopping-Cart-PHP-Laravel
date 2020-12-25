<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath'=> 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
            'title' => 'Harry potter',
            'description' => 'Super cool .',
            'price' => 10


        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'=> 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
            'title' => 'Harry potter',
            'description' => 'Super cool .',
            'price' => 10


        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath'=> 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
            'title' => 'Harry potter',
            'description' => 'Super cool .',
            'price' => 10


        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath'=> 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
            'title' => 'Harry potter',
            'description' => 'Super cool .',
            'price' => 10


        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath'=> 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
            'title' => 'Harry potter',
            'description' => 'Super cool .',
            'price' => 10


        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath'=> 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
            'title' => 'Harry potter',
            'description' => 'Super cool .',
            'price' => 10


        ]);
        $product->save();
      
    }
}
