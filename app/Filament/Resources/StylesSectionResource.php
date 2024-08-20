<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StylesSectionResource\Pages;
use App\Filament\Resources\StylesSectionResource\RelationManagers;
use App\Models\StylesSection;
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

class StylesSectionResource extends Resource
{
    protected static ?string $model = StylesSection::class;

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
                TextInput::make('subtitle')
                ->minLength(1)->maxLength(250)
                ->required(),
                FileUpload::make('image')
                ->name('Banner Image')
                ->image()
                ->preserveFilenames()
                ->imageResizeMode('cover')
                ->imageCropAspectRatio('0.68:1')
                ->imageResizeTargetWidth('480')
                ->imageResizeTargetHeight('707')                    
                ->directory('images/styles')
                ->acceptedFileTypes(['image/webp']) // Ensures only WebP images are accepted
                ->maxSize(3072)  
                ->directory('public')
                ->storeFileNamesIn('original_filenames')              
                ->columnSpanFull()          
                ->required(),
                Textarea::make('description')
                ->rows(5)
                ->cols(20)
                ->minLength(10)
                ->maxLength(250)
                ->columnSpanFull()          
                ->required(),
                Toggle::make('is_featured')
                ->label('Do you want this image to be in the styles section?')
                ->afterStateUpdated(function (string $state, callable $set, $get) {
                    if ($state) {
                        $featuredCount = StylesSection::where('is_featured', true)
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
                            StylesSection::where('is_featured', true)
                                ->where('id', '!=', $get('id')) // Exclude current record
                                ->update(['is_featured' => false]);
                        }
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
                ImageColumn::make('image')->disk('public'),            
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('is_featured')
                ->label('Status')
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
            'index' => Pages\ListStylesSections::route('/'),
            'create' => Pages\CreateStylesSection::route('/create'),
            'edit' => Pages\EditStylesSection::route('/{record}/edit'),
        ];
    }
}
