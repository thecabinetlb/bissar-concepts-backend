<?php

namespace App\Filament\Resources\StylesSectionResource\Pages;

use App\Filament\Resources\StylesSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStylesSection extends EditRecord
{
    protected static string $resource = StylesSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
