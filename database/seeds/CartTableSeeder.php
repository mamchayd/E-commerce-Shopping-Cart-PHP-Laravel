<?php

use Illuminate\Database\Seeder;
use App\Http\Request;

class CartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $carts = new \App\Cart([
            'content'=> ['test','tetet'],
            'quantity'=>2,
            
        ]);
        $carts->save();

    }
}
