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
        DB::table('products')->insert([
            ['NAME_PRODUCT' => 'Cordoba','PRICE' => '132.99','DESCRIPTION' => '','IMAGE' => 'assets/images/product/product-1.png','ID_CATEGORY' => '1'],
            ['NAME_PRODUCT' => 'Takamine P5DC','PRICE' => '146.99','DESCRIPTION' => '','IMAGE' => 'assets/images/product/product-2.png','ID_CATEGORY' => '2'],
            ['NAME_PRODUCT' => 'Fender American Deluxe Precision Bass®','PRICE' => '132.99','DESCRIPTION' => '','IMAGE' => 'assets/images/product/product-14.png','ID_CATEGORY' => '4'],
            ['NAME_PRODUCT' => 'Samick UK-50','PRICE' => '132.99','DESCRIPTION' => '','IMAGE' => 'assets/images/product/product-10.png','ID_CATEGORY' => '5'],
            ['NAME_PRODUCT' => 'Affinity Strat RW RCR','PRICE' => '132.99','DESCRIPTION' => '','IMAGE' => 'assets/images/product/product-7.png','ID_CATEGORY' => '3']
        ]);
    }
}
