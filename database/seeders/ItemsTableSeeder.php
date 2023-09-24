<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Faker\Factory;


class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        $limit = 10;
        
        $fake  = Factory::create();
        for ($i = 0; $i < $limit; $i++){
            DB::table('products')->insert([
                'name' => Str::random(10),
                'price' => $fake->numerify($string = '###'),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]);
    }
}
}
