<?php

namespace App\Filament\Resources\ScalableSEOSolutionResource\Pages;

use App\Filament\Resources\ScalableSEOSolutionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditScalableSEOSolution extends EditRecord
{
    protected static string $resource = ScalableSEOSolutionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
