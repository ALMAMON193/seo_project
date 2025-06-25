<?php

namespace App\Filament\Resources\DataAnalysisResource\Pages;

use App\Filament\Resources\DataAnalysisResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDataAnalysis extends EditRecord
{
    protected static string $resource = DataAnalysisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
