<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class Architect_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('architect')->insert([

            'tipo'=>'interiores',
            'user_id'=>'1',
            'created_at'=>date('Y-m-d h:m:s')

        ]);

        DB::table('architect')->insert([

            'tipo'=>'edificaion',
            'user_id'=>'2',
            'created_at'=>date('Y-m-d h:m:s')

        ]);
    
    }
}
