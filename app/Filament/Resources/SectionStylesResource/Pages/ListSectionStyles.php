<?php

namespace App\Filament\Resources\SectionStylesResource\Pages;

use App\Filament\Resources\SectionStylesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSectionStyles extends ListRecords
{
    protected static string $resource = SectionStylesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
