<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Users_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([

            'name'=>'Luis Jimenez',
            'nickname'=>'Z3R0',
            'email'=>'Z3R0@mail.com',
            'password'=>Hash::make('123'),
            'phone'=>'6361234567',
            'img'=>'default.jpg',
            'level'=>1,
            'created_at'=>date('Y-m-d h:m:s')

        ]);
        DB::table('users')->insert([

            'name'=>'Admin',
            'nickname'=>'Admin',
            'email'=>'Admin@mail.com',
            'password'=>Hash::make('987'),
            'phone'=>'6562345678',
            'img'=>'default.jpg',
            'level'=>1,
            'created_at'=>date('Y-m-d h:m:s')

        ]);
    }
}
