<?php

namespace App\Filament\Resources\SectionStylesResource\Pages;

use App\Filament\Resources\SectionStylesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSectionStyles extends EditRecord
{
    protected static string $resource = SectionStylesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
