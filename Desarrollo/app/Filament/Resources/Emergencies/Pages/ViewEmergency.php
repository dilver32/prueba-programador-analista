<?php

namespace App\Filament\Resources\Emergencies\Pages;

use App\Filament\Resources\Emergencies\EmergencyResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewEmergency extends ViewRecord
{
    protected static string $resource = EmergencyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
