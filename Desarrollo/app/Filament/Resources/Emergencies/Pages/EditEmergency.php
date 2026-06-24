<?php

namespace App\Filament\Resources\Emergencies\Pages;

use App\Filament\Resources\Emergencies\EmergencyResource;
use App\Filament\Resources\Emergencies\RelationManagers\StationsRelationManager;
use Filament\Forms\Components\MultiSelect;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditEmergency extends EditRecord
{
    protected static string $resource = EmergencyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }

    protected function getFormSchema(): array
    {
        return [
            MultiSelect::make('stations')
                ->relationship('stations', 'name')
                ->label('Estaciones')
                ->preload(),
        ];
    }

    public function getRelationManagers(): array
    {
        return [
            StationsRelationManager::class,
        ];
    }
}
