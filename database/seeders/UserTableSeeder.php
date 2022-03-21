<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->delete();
        DB::table('users')->insert([
            'name' => 'eros',
            'email' => 'eros.ru@outlook.com',
            'password' => Hash::make('admin'),
            'role' => 1, 
            'avatar_path'=> ''
        ]);
    }
}

// class CountryTableSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      *
//      * @return void
//      */
//     public function run()
//     {
//         // DB::table('users')->delete();
//         DB::table('users')->insert([
//             'name' => 'eros',
//             'email' => 'eros.ru@outlook.com',
//             'password' => Hash::make('admin'),
//             'role' => 1, 
//             'avatar_path'=> ''
//         ]);
//     }
// }
