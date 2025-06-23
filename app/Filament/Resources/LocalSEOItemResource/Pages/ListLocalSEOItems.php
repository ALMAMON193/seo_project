<?php

namespace App\Filament\Resources\LocalSEOItemResource\Pages;

use App\Filament\Resources\LocalSEOItemResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLocalSEOItems extends ListRecords
{
    protected static string $resource = LocalSEOItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
