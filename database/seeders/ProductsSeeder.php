<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([[
                'name' => 'nintendo',
                'price' => '199',
                'category' => 'game',
                'description' => 'game handheld',
                'gallery' => 'https://images.unsplash.com/photo-1618397360795-952a13220a66?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80'
            ],
            [
                'name' => 'ps5',
                'price' => '299',
                'category' => 'game',
                'description' => 'game console',
                'gallery' => 'https://images.unsplash.com/photo-1606144042614-b2417e99c4e3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80'
            ]]);
    }
}
