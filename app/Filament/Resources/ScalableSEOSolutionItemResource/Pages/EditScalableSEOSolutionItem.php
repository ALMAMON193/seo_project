<?php

namespace App\Filament\Resources\ScalableSEOSolutionItemResource\Pages;

use App\Filament\Resources\ScalableSEOSolutionItemResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditScalableSEOSolutionItem extends EditRecord
{
    protected static string $resource = ScalableSEOSolutionItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
