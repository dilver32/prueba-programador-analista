<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        Team::insert([
            ['name' => 'Alpha', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bravo', 'status' => 'active', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
