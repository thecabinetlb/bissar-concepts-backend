<?php

namespace App\Filament\Resources\SectionBehindTheBrandImageResource\Pages;

use App\Filament\Resources\SectionBehindTheBrandImageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSectionBehindTheBrandImage extends EditRecord
{
    protected static string $resource = SectionBehindTheBrandImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
