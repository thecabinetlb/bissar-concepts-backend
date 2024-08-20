<?php

namespace App\Filament\Resources\PortfolioPageBannerResource\Pages;

use App\Filament\Resources\PortfolioPageBannerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPortfolioPageBanners extends ListRecords
{
    protected static string $resource = PortfolioPageBannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
