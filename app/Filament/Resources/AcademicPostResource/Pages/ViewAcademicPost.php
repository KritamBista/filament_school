<?php

namespace App\Filament\Resources\AcademicPostResource\Pages;

use App\Filament\Resources\AcademicPostResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewAcademicPost extends ViewRecord
{
    protected static string $resource = AcademicPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
