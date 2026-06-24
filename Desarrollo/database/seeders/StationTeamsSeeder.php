<?php

namespace Database\Seeders;

use App\Models\Station;
use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StationTeamsSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $team = Team::first();
        $station = Station::first();

        if ($team && $station) {
            $station->teams()->syncWithoutDetaching([$team->id]);
        }
    }
}
