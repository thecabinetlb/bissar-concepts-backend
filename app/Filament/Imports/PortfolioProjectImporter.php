<?php

namespace App\Filament\Imports;

use App\Models\PortfolioProject;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;

class PortfolioProjectImporter extends Importer
{
    protected static ?string $model = PortfolioProject::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('id'),
            ImportColumn::make('title'),
            ImportColumn::make('category'),
        ImportColumn::make('architects'),
        ImportColumn::make('year'),
        ImportColumn::make('location'),
        ImportColumn::make('description'),
        ImportColumn::make('banner'),
        ImportColumn::make('thumbnail'),
        ImportColumn::make('images'),
        ImportColumn::make('client'),
        ImportColumn::make('slug'),
        ImportColumn::make('type_id'),
        ImportColumn::make('created_at'),
        ImportColumn::make('updated_at')        
    ];
    }

    public function resolveRecord(): ?PortfolioProject
    {
        // return PortfolioProject::firstOrNew([
        //     // Update existing records, matching them by `$this->data['column_name']`
        //     'email' => $this->data['email'],
        // ]);

        return new PortfolioProject();
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your portfolio project import has completed and ' . number_format($import->successful_rows) . ' ' . str('row')->plural($import->successful_rows) . ' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to import.';
        }

        return $body;
    }
}
