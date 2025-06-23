<?php

namespace App\Filament\Resources\KeywordResearchItemResource\Pages;

use App\Filament\Resources\KeywordResearchItemResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKeywordResearchItem extends EditRecord
{
    protected static string $resource = KeywordResearchItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
