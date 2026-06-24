<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['emergency_type_id', 'name', 'address', 'longitud', 'latitude', 'status'])]
class Emergency extends Model
{
    use HasFactory;

    protected $table = 'emergency';

    public function type(): BelongsTo
    {
        return $this->belongsTo(EmergencyType::class, 'emergency_type_id');
    }

    public function emergencyStations(): HasMany
    {
        return $this->hasMany(EmergencyStation::class, 'emergency_id');
    }

    public function stations(): BelongsToMany
    {
        return $this->belongsToMany(Station::class, 'emergency_station', 'emergency_id', 'station_id')
            ->withPivot('status')
            ->withTimestamps();
    }

    public function reports(): HasMany
    {
        return $this->hasMany(Report::class, 'emergency_id');
    }
}
