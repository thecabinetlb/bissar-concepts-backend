<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SectionServiceResource\Pages;
use App\Filament\Resources\SectionServiceResource\RelationManagers;
use App\Models\SectionService;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SectionServiceResource extends Resource
{
    protected static ?string $model = SectionService::class;


    protected static ?string $navigationGroup = 'Sections';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Section::make('Styles Section Item')
            ->description('Add your new style and feature it in your homepage.')
            ->schema([
                TextInput::make('title')
                ->minLength(1)->maxLength(150)
                ->required(),
                FileUpload::make('image')
                ->image()
                ->preserveFilenames()
                ->imageEditor()
                ->directory('uploads/services')
      
                ->columnSpanFull()          
                ->required(),
                Textarea::make('description')
                ->rows(5)
                ->cols(20)
                ->minLength(10)
                ->maxLength(500)
                ->columnSpanFull()          
                ->required(),
                Toggle::make('is_featured')
                ->label('Do you want this image to be in the styles section?')
                ->afterStateUpdated(function (string $state, callable $set, $get) {
                    if ($state) {
                        $featuredCount = SectionService::where('is_featured', true)
                            ->where('id', '!=', $get('id')) // Exclude current record
                            ->count();
            
                        if ($featuredCount >= 3) {
                            // If there are already 3 featured items, prevent adding more
                            Notification::make()
                                ->title('Only 3 items can be featured at a time.')
                                ->danger()
                                ->send();
            
                            // Revert the toggle state
                            $set('is_featured', false);
                        } else {
                            // Automatically unset other featured banners
                            SectionService::where('is_featured', true)
                                ->where('id', '!=', $get('id')) // Exclude current record
                                ->update(['is_featured' => false]);
                        }
                    }
                })
                ->columnSpanFull()
                ->required(),        
            ])
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
            'index' => Pages\ListSectionServices::route('/'),
            'create' => Pages\CreateSectionService::route('/create'),
            'edit' => Pages\EditSectionService::route('/{record}/edit'),
        ];
    }
}
