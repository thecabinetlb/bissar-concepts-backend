<?php

namespace App\Filament\Resources\SectionEditorialCarouselResource\Pages;

use App\Filament\Resources\SectionEditorialCarouselResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSectionEditorialCarousel extends EditRecord
{
    protected static string $resource = SectionEditorialCarouselResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
