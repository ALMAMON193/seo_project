<?php

namespace App\Filament\Resources\HomeAboutUSItemResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\HomeAboutUSItemResource;

class ListHomeAboutUSItems extends ListRecords
{
    protected static string $resource = HomeAboutUSItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
