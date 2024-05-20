<?php

namespace App\Filament\Resources\AboutPostResource\Pages;

use App\Filament\Resources\AboutPostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutPost extends EditRecord
{
    protected static string $resource = AboutPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
