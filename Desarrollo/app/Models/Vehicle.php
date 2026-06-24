<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

#[Fillable(['number', 'status'])]
class Vehicle extends Model
{
    use HasFactory;

    protected $table = 'vehicle';

    public function stations(): BelongsToMany
    {
        return $this->belongsToMany(Station::class, 'station_vehicle', 'vehicle_id', 'station_id')
            ->withTimestamps();
    }
}
