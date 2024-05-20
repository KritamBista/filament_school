<?php

namespace App\Filament\Resources\FacillityResource\Pages;

use App\Filament\Resources\FacillityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFacillity extends EditRecord
{
    protected static string $resource = FacillityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
