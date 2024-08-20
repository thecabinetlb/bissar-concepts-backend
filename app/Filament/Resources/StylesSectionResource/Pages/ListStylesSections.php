<?php

namespace App\Filament\Resources\StylesSectionResource\Pages;

use App\Filament\Resources\StylesSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStylesSections extends ListRecords
{
    protected static string $resource = StylesSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
