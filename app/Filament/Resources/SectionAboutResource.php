<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SectionAboutResource\Pages;
use App\Filament\Resources\SectionAboutResource\RelationManagers;
use App\Models\SectionAbout;
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

class SectionAboutResource extends Resource
{
    protected static ?string $model = SectionAbout::class;


    protected static ?string $navigationGroup = 'Sections';

    protected static ?string $navigationLabel = 'About Section';

    public static function getNavigationSort(): ?int
    {
        return 1; // Order this resource as the first item in the group
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Section::make('About Sevtion Image')
            ->description('Add your portrait, title and description here.')
            ->schema([
                TextInput::make('title')
                ->minLength(1)->maxLength(150)
                ->required(),
                FileUpload::make('image')
                ->name('Portrait')
                ->image()
                ->preserveFilenames()
                ->imageEditor()                                   
                ->directory('uploads/about')
      
                ->columnSpanFull()          
                ->required(),
                Textarea::make('description')
                ->rows(5)
                ->cols(20)
                ->minLength(10)
                ->maxLength(250)
                ->columnSpanFull(),
                Toggle::make('is_featured')
                ->label('Set as About Section')
                ->afterStateUpdated(function (string $state, callable $set, $get) {
                    if ($state) {
                        // Automatically unset other featured banners
                        SectionAbout::where('is_featured', true)
                            ->where('id', '!=', $get('id')) // Exclude current record
                            ->update(['is_featured' => false]);
                    }
                })
                ->columnSpanFull()          
                ->required(),        
            ])->columnSpan(1)->columns(2)
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            ImageColumn::make('image'),            
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
            'index' => Pages\ListSectionAbouts::route('/'),
            'create' => Pages\CreateSectionAbout::route('/create'),
            'edit' => Pages\EditSectionAbout::route('/{record}/edit'),
        ];
    }
}
