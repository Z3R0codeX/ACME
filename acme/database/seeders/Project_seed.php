<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class Project_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('project')->insert([

            'name'=>'remodelacion',
            'description'=>'remodelacion interior',
            'st_date'=>'2010-01-22',
            'end_date'=>'2010-04-12',
            'client_id'=>1,
            'architect_id'=>1,
            'blueprint_id'=>1,
            'zone_id'=>2,
            'created_at'=>date('Y-m-d h:m:s')

        ]);

        DB::table('project')->insert([

            'name'=>'construccion',
            'description'=>'construccion completa',
            'st_date'=>'2010-01-22',
            'end_date'=>'2010-04-12',
            'client_id'=>1,
            'architect_id'=>2,
            'blueprint_id'=>2,
            'zone_id'=>1,
            'created_at'=>date('Y-m-d h:m:s')

        ]);

    }
}
