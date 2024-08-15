<?php

namespace App\Filament\Resources\CollaborationProjectResource\Pages;

use App\Filament\Resources\CollaborationProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCollaborationProjects extends ListRecords
{
    protected static string $resource = CollaborationProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
