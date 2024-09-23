<?php

namespace App\Filament\Resources\SectionAboutResource\Pages;

use App\Filament\Resources\SectionAboutResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSectionAbouts extends ListRecords
{
    protected static string $resource = SectionAboutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
