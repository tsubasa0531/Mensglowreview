<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ProductsTableSeeder extends Seeder
{  public function run()
   {
     DB::table('products')->insert([
        'name' => 'CICA RETI-A',
        'body' => '初心者でも使いやすいレチノール美容液',
        'price' => '3300',
        'created_at' => new Datetime(),
        'updated_at' => new Datetime(),
        'brand_id' => 1
      ],
        [
        'name' => 'The Vitamin C 23',
        'bpdy' => '高強度純粋ビタミンC23%配合美容液',
        'price' => '2200',
        'created_at' => new Datetime(),
        'updated_at' => new Datetime(),
        'brand_id' => 2
      ]);
   }
}