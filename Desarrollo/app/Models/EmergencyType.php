<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name'])]
class EmergencyType extends Model
{
    use HasFactory;

    protected $table = 'emergency_type';

    public function emergencies(): HasMany
    {
        return $this->hasMany(Emergency::class, 'emergency_type_id');
    }
}
