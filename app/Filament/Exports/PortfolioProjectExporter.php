<?php

namespace App\Filament\Exports;

use App\Models\PortfolioProject;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class PortfolioProjectExporter extends Exporter
{
    protected static ?string $model = PortfolioProject::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('id')
                ->label('ID'),
            ExportColumn::make('title'),
            ExportColumn::make('category'),
            ExportColumn::make('architects'),
            ExportColumn::make('year'),
            ExportColumn::make('location'),
            ExportColumn::make('description'),
            ExportColumn::make('banner'),
            ExportColumn::make('thumbnail'),
            ExportColumn::make('images'),
            ExportColumn::make('client'),
            ExportColumn::make('slug'),
            ExportColumn::make('type_id'),
            ExportColumn::make('created_at'),
            ExportColumn::make('updated_at'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your portfolio project export has completed and ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}
