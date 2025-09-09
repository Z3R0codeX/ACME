<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class Blueprints_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blueprint')->insert([

            'name'=>'cocina integral',
            'description'=>'remodelacion completa',
            'version'=>1,
            'created_at'=>date('Y-m-d h:m:s')

        ]);

        DB::table('blueprint')->insert([

            'name'=>'centro comercial',
            'description'=>'zona de recreacion compras, comida y mucho mas',
            'version'=>1,
            'created_at'=>date('Y-m-d h:m:s')

        ]);

    }
}
