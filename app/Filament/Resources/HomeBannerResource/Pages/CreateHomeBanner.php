<?php

namespace App\Filament\Resources\HomeBannerResource\Pages;

use App\Models\CMS;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\HomeBannerResource;

class CreateHomeBanner extends CreateRecord
{
    protected static string $resource = HomeBannerResource::class;
}
