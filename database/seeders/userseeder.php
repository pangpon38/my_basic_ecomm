<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([[
            'username' => 'mama',
            'email' => 'mama38@gmail.com',
            'password' => Hash::make('123456')
        ],
        [
            'username' => 'john',
            'email' => 'john38@gmail.com',
            'password' => Hash::make('123456')
        ]]);
    }
}
