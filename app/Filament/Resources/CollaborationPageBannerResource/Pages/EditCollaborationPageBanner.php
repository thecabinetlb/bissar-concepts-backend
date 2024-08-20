<?php

namespace App\Filament\Resources\CollaborationPageBannerResource\Pages;

use App\Filament\Resources\CollaborationPageBannerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCollaborationPageBanner extends EditRecord
{
    protected static string $resource = CollaborationPageBannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
