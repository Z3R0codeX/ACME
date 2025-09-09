<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class Zones_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('zone')->insert([

            'name'=>'centro',
            'description'=>'comercial',
            'surface'=>1200,
            'created_at'=>date('Y-m-d h:m:s')

        ]);

        DB::table('zone')->insert([

            'name'=>'sur',
            'description'=>'recidencial',
            'surface'=>3000,
            'created_at'=>date('Y-m-d h:m:s')

        ]);
    }
}
