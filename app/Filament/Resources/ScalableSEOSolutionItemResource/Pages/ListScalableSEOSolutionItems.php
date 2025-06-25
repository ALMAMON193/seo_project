<?php

namespace App\Filament\Resources\ScalableSEOSolutionItemResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\ScalableSEOSolutionItemResource;

class ListScalableSEOSolutionItems extends ListRecords
{
    protected static string $resource = ScalableSEOSolutionItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
