<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomepageBannerResource\Pages;
use App\Filament\Resources\HomepageBannerResource\RelationManagers;
use App\Models\HomepageBanner;
use Closure;
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
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class HomepageBannerResource extends Resource
{
    protected static ?string $model = HomepageBanner::class;

    protected static ?string $navigationGroup = 'Banners';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Section::make('Homepage Image')
            ->description('Add your homepage banner image and title5 here.')
            ->schema([
                TextInput::make('title')
                ->minLength(1)->maxLength(150)
                ->required(),
                FileUpload::make('image')
                ->name('Banner Image')
                ->image()
                ->preserveFilenames()
                ->imageEditor()                                   
                ->directory('images/hero')
                ->afterStateUpdated(function (Closure $set, $state) {
                    if (is_string($state) && file_exists($state)) {
                        // Generate a unique filename with a .webp extension
                        $filename = time() . '.webp';
            
                        // Convert the uploaded image to WebP and save it
                        HomepageBanner::make($state)
                            ->encode('webp')
                            ->save(public_path('storage/images/hero/' . $filename));
            
                        // Set the path to the converted image
                        $set('image', 'images/hero/' . $filename);
                    }
                })                        
                ->maxSize(3072)  
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
                ->label('Set as Homepage Banner')
                ->afterStateUpdated(function (string $state, callable $set, $get) {
                    if ($state) {
                        // Automatically unset other featured banners
                        HomepageBanner::where('is_featured', true)
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
            'index' => Pages\ListHomepageBanners::route('/'),
            'create' => Pages\CreateHomepageBanner::route('/create'),
            'edit' => Pages\EditHomepageBanner::route('/{record}/edit'),
        ];
    }
}
