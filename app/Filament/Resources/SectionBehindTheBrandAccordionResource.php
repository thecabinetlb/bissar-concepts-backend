<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SectionBehindTheBrandAccordionResource\Pages;
use App\Filament\Resources\SectionBehindTheBrandAccordionResource\RelationManagers;
use App\Models\SectionBehindTheBrandAccordion;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SectionBehindTheBrandAccordionResource extends Resource
{
    protected static ?string $model = SectionBehindTheBrandAccordion::class;

    protected static ?string $navigationGroup = 'Sections';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Section::make('Behind the brand Section Item')
            ->description('Add a new accordion topic and feature it in the behind the brand section.')
            ->schema([
                TextInput::make('title')
                ->minLength(1)->maxLength(150)
                ->required(),
                Textarea::make('description')
                ->rows(5)
                ->cols(20)
                ->minLength(10)
                ->maxLength(500)
                ->columnSpanFull()          
                ->required(),
                Toggle::make('is_featured')
                ->label('Do you want to feature this in the behind the brand accordion section?')
                ->columnSpanFull()
                ->required(),        
            ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('is_featured')
                ->label('Featured?')
                ->formatStateUsing(fn($state) => $state ? 'Featured' : 'Not Featured')
                ->badge()
                ->colors([
                    'success' => fn($state) => $state,   // Green badge for Featured
                    'secondary' => fn($state) => !$state, // Gray badge for Not Featured
                ]),            
                TextColumn::make('created_at')
                ->dateTime('Y-M-d')
                ->sortable()
                ->searchable(),
                TextColumn::make('updated_at')
                ->dateTime('Y-M-d')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSectionBehindTheBrandAccordions::route('/'),
            'create' => Pages\CreateSectionBehindTheBrandAccordion::route('/create'),
            'edit' => Pages\EditSectionBehindTheBrandAccordion::route('/{record}/edit'),
        ];
    }
}
