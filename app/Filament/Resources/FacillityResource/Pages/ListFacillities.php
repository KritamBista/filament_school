<?php

namespace App\Filament\Resources\FacillityResource\Pages;

use App\Filament\Resources\FacillityResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFacillities extends ListRecords
{
    protected static string $resource = FacillityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
