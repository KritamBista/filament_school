<?php

namespace App\Filament\Resources\AcademicPostResource\Pages;

use App\Filament\Resources\AcademicPostResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAcademicPosts extends ListRecords
{
    protected static string $resource = AcademicPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
