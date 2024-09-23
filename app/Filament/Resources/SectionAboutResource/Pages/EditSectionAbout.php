<?php

namespace App\Filament\Resources\SectionAboutResource\Pages;

use App\Filament\Resources\SectionAboutResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSectionAbout extends EditRecord
{
    protected static string $resource = SectionAboutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
