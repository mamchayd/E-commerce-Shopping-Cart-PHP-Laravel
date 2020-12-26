<?php

use Illuminate\Database\Seeder;

class DiscountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $discount = new \App\Discount([
            'code'=> 'TestDevinweb',
            'cart_id'=> 1,
            'value' => 10,
        ]);
        $discount->save();

    }
}
