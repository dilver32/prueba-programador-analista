<?php

namespace Database\Seeders;

use App\Models\Station;
use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StationVehicleSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $vehicle = Vehicle::first();
        $station = Station::first();

        if ($vehicle && $station) {
            $station->vehicles()->syncWithoutDetaching([$vehicle->id]);
        }
    }
}
