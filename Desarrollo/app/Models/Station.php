<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name', 'longitud', 'latitud'])]
class Station extends Model
{
    use HasFactory;

    protected $table = 'station';

    public function emergencies(): BelongsToMany
    {
        return $this->belongsToMany(Emergency::class, 'emergency_station', 'station_id', 'emergency_id')
            ->withPivot('status')
            ->withTimestamps();
    }

    public function emergencyStations(): HasMany
    {
        return $this->hasMany(EmergencyStation::class, 'station_id');
    }

    public function teams(): BelongsToMany
    {
        return $this->belongsToMany(Team::class, 'station_teams', 'station_id', 'team_id')
            ->withTimestamps();
    }

    public function vehicles(): BelongsToMany
    {
        return $this->belongsToMany(Vehicle::class, 'station_vehicle', 'station_id', 'vehicle_id')
            ->withTimestamps();
    }
}
