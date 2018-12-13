<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
//        DB::table('products')->insert([
//            ['name' => 'Cordoba','price' => '132.99','quantity'=>'2','DESCRIPTION' => '','image' => 'asset/images/product/product-1.png','id_category' => '1'],
//            ['name' => 'Takamine P5DC','price' => '146.99','quantity'=>'3','DESCRIPTION' => '','image' => 'asset/images/product/product-2.png','id_category' => '2'],
//            ['name' => 'Fender American Deluxe Precision Bass®','quantity'=>'5','price' => '132.99','DESCRIPTION' => '','image' => 'asset/images/product/product-14.png','id_category' => '4'],
//            ['name' => 'Samick UK-50','price' => '132.99','quantity'=>'7','DESCRIPTION' => '','image' => 'asset/images/product/product-10.png','id_category' => '5'],
//            ['name' => 'Affinity Strat RW RCR','price' => '132.99','quantity'=>'1','DESCRIPTION' => '','image' => 'asset/images/product/product-7.png','id_category' => '3']
//        ]);
        factory(App\Product::class, 100)->create();
    }
}
