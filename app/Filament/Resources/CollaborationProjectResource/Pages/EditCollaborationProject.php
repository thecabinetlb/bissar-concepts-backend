<?php

namespace App\Filament\Resources\CollaborationProjectResource\Pages;

use App\Filament\Resources\CollaborationProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCollaborationProject extends EditRecord
{
    protected static string $resource = CollaborationProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
