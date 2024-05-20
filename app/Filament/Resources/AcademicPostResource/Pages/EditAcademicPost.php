<?php

namespace App\Filament\Resources\AcademicPostResource\Pages;

use App\Filament\Resources\AcademicPostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAcademicPost extends EditRecord
{
    protected static string $resource = AcademicPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
