<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class Clientes_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clients')->insert([

            'address'=>'calle cuadrada 123',
            'user_id'=>'1',
            'created_at'=>date('Y-m-d h:m:s')

        ]);

        DB::table('clients')->insert([

            'address'=>'callejon sin nombre 123-a',
            'user_id'=>'2',
            'created_at'=>date('Y-m-d h:m:s')

        ]);

    }
}
