<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
  
        $product = array(array('name'=>'Iron box','description'=>'iron box','original_price'=>'3000','selling_price'=>'2000'));
        DB::table('products')->insert($product);
    }
}
