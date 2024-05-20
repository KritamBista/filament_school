<?php

namespace App\Filament\Resources\FacillityResource\Pages;

use App\Filament\Resources\FacillityResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewFacillity extends ViewRecord
{
    protected static string $resource = FacillityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
