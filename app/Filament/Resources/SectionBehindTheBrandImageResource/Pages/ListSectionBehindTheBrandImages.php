<?php

namespace App\Filament\Resources\SectionBehindTheBrandImageResource\Pages;

use App\Filament\Resources\SectionBehindTheBrandImageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSectionBehindTheBrandImages extends ListRecords
{
    protected static string $resource = SectionBehindTheBrandImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
