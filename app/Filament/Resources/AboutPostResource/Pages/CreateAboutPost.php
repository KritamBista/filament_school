<?php

namespace App\Filament\Resources\AboutPostResource\Pages;

use App\Filament\Resources\AboutPostResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAboutPost extends CreateRecord
{
    protected static string $resource = AboutPostResource::class;
}
