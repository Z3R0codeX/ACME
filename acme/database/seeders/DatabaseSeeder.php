<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        $this->call(Users_seed::class);
        $this->call(Architect_seed::class);
        $this->call(Blueprints_seed::class);
        $this->call(Clientes_seed::class);
        $this->call(Zones_seed::class);
        $this->call(Project_seed::class);

    }
}
