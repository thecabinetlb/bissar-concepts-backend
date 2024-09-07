<?php

namespace App\Filament\Resources\SectionBehindTheBrandAccordionResource\Pages;

use App\Filament\Resources\SectionBehindTheBrandAccordionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSectionBehindTheBrandAccordions extends ListRecords
{
    protected static string $resource = SectionBehindTheBrandAccordionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
