<?php

namespace App\Filament\Resources\ContentSEOResource\Pages;

use Illuminate\Support\Str;
use Filament\Tables\Actions\CreateAction;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\ContentSEOResource;

class CreateContentSEO extends CreateRecord
{
    protected static string $resource = ContentSEOResource::class;
}
