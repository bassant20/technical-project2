<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
                'title' => 'short sleeves t-shirt',
                'is_in_stock' => '1',
                'average_rating' => '3',
                'default_variant' => '1',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'long sleeves shirt',
                'is_in_stock' => '1',
                'average_rating' => '4',
                'default_variant' => '2',

                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
