<?php

namespace App\Filament\Resources\PortfolioPageBannerResource\Pages;

use App\Filament\Resources\PortfolioPageBannerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPortfolioPageBanner extends EditRecord
{
    protected static string $resource = PortfolioPageBannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
