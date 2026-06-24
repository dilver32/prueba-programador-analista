<?php

namespace Database\Seeders;

use App\Models\Station;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StationSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        Station::insert([
            ['name' => 'Central Station', 'longitud' => -58.3816, 'latitud' => -34.6037, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'North Station', 'longitud' => -58.4000, 'latitud' => -34.5800, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
