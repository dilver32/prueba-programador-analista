<?php

namespace App\Filament\Resources\Emergencies\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use App\Models\EmergencyType;

class EmergencyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('emergency_type_id')
                    ->required()
                    ->options(EmergencyType::pluck('name', 'id'))
                    ->searchable(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('address')
                    ->required(),
                TextInput::make('longitud')
                    ->numeric(),
                TextInput::make('latitude')
                    ->numeric(),
          Select::make('status')
                    ->required()
                    ->options([
                        'pending' => 'recibido',
                        'in_progress' => 'asignado',
                        'resolved' => 'resuelto',
                    ])
                    ->default('pending'),
            ]);
    }
}
