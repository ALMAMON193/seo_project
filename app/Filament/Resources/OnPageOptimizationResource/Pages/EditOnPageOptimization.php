<?php

namespace App\Filament\Resources\OnPageOptimizationResource\Pages;

use App\Filament\Resources\OnPageOptimizationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOnPageOptimization extends EditRecord
{
    protected static string $resource = OnPageOptimizationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
