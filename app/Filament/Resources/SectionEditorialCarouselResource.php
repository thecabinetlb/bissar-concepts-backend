<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SectionEditorialCarouselResource\Pages;
use App\Filament\Resources\SectionEditorialCarouselResource\RelationManagers;
use App\Models\EditorialCarouselSection;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SectionEditorialCarouselResource extends Resource
{
    protected static ?string $model = EditorialCarouselSection::class;

    protected static ?string $navigationGroup = 'Sections';
    protected static ?string $navigationLabel = 'Editorial Carousel';

    public static function getNavigationSort(): ?int
    {
        return 4; // Order this resource as the first item in the group
    }    
    
    public static function getTableQuery()
    {
        return parent::getTableQuery()->orderBy('created_at', 'desc');
    }
    
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Section::make('Editorial Carousel Images')
            ->description('Add your editorial page title, carousel images and description here.')
            ->schema([
                TextInput::make('title')
                ->minLength(1)->maxLength(150)
                ->required(),
                FileUpload::make('images')
                ->name('Carousel Images')
                ->image()->preserveFilenames()
                ->multiple()
                ->reorderable()
                ->imageEditor() 
    
                ->directory('uploads/editorial/images')            
                ->required(),
                Textarea::make('description')
                ->rows(5)
                ->cols(20)
                ->minLength(10)
                ->maxLength(500),
                Toggle::make('is_featured')
                ->label('Do you want this to be in the editorial carousel section?')
                ->afterStateUpdated(function (string $state, callable $set, $get) {
                    if ($state) {
                        // Automatically unset other featured banners
                        EditorialCarouselSection::where('is_featured', true)
                            ->where('id', '!=', $get('id')) // Exclude current record
                            ->update(['is_featured' => false]);
                    }
                })
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
                ->formatStateUsing(fn($state) => $state ? 'Featured' : 'Not Featured')
                ->label('Featured?')
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
            'index' => Pages\ListSectionEditorialCarousels::route('/'),
            'create' => Pages\CreateSectionEditorialCarousel::route('/create'),
            'edit' => Pages\EditSectionEditorialCarousel::route('/{record}/edit'),
        ];
    }
}
