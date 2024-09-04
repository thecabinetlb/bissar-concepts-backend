<?php

namespace App\Filament\Resources\SectionEditorialCarouselResource\Pages;

use App\Filament\Resources\SectionEditorialCarouselResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSectionEditorialCarousels extends ListRecords
{
    protected static string $resource = SectionEditorialCarouselResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
