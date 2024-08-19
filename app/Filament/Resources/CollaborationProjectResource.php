<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CollaborationProjectResource\Pages;
use App\Filament\Resources\CollaborationProjectResource\RelationManagers;
use App\Models\CollaborationProject;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Carbon\Carbon;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Illuminate\Support\Str;

class CollaborationProjectResource extends Resource
{
    protected static ?string $model = CollaborationProject::class;

    protected static ?string $navigationGroup = 'Projects';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
        Section::make('Create a Collaboration Project')
        ->description('fill out your collaborations project info.')
        ->schema([
            TextInput::make('title')
            ->live(onBlur:true)
            ->unique(ignoreRecord: true)
            ->minLength(1)->maxLength(150)
            ->afterStateUpdated(function (string $operation, $state, Forms\Set $set) {
                if ($operation === 'edit') {
                    return;
                }
                $set('slug', Str::slug($state));
            })
            ->required(),
            TextInput::make('slug')->unique(ignoreRecord: true)->minLength(1)->maxLength(150)->required(),
            Radio::make('type_id')
            ->label("What's the project's type?")
            ->options([
                1 => 'Design',
                2 => 'Houses',
                3 => 'Interior',
                4 => 'Living'
            ])
            ->inline()
            ->required()
            ->columnSpanFull(),            
            Textarea::make('description')
            ->rows(5)
            ->cols(20)
            ->minLength(10)
            ->maxLength(300)
            ->required()
            ->columnSpanFull(),
            DateTimePicker::make('completion_date')
            ->live(onBlur:true)
            ->default(now())
            ->afterStateUpdated(fn ($state, callable $set) => $set('year', Carbon::parse($state)->format('Y')))
            ->required()
            ->columnSpanFull(),
            TextInput::make('location')->minLength(1)->maxLength(150)->required(),
            TextInput::make('year')->required(),              
            TextInput::make('client')->minLength(1)->maxLength(150)->required(),
            TagsInput::make('architects')
            ->placeholder('Add more architects.')
            ->default(['Zaher Bissar'])
            ->nestedRecursiveRules([
                'min:2',
            ])->required(),
        ])->columnSpan(1)->columns(2)
        ->collapsible(),

        Section::make('Project Images')
        ->description('Add the banner, carousel and thumbnail images of your collaborations project.')
        ->schema([
            FileUpload::make('thumbnail')
            ->name('Thumbnail Image')
            ->image()->preserveFilenames()
            ->imageResizeMode('cover')
            ->imageCropAspectRatio('1:1')
            ->imageResizeTargetWidth('340')
            ->imageResizeTargetHeight('348')
            ->getUploadedFileNameForStorageUsing(
                fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                    ->prepend('custom-prefix-'),
            )
            ->storeFileNamesIn('thumbnail_image_names')                    
            ->directory('images/projects/collaborations/thumbnails')            
            ->required()
            ->columnSpanFull(),
            FileUpload::make('banner')
            ->name('Banner Image')
            ->image()->preserveFilenames()
            ->imageResizeMode('cover')
            ->imageCropAspectRatio('1.68:1')
            ->imageResizeTargetWidth('1226')
            ->imageResizeTargetHeight('728')                    
            ->getUploadedFileNameForStorageUsing(
                fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                    ->prepend('custom-prefix-'),
            )
            ->storeFileNamesIn('banner_image_names')
            ->directory('images/projects/collaborations/banners')            
            ->required()
            ->columnSpanFull(),
            FileUpload::make('images')
            ->name('Carousel Images')
            ->image()->preserveFilenames()
            ->multiple()
            ->reorderable()
            ->imageResizeMode('cover')
            ->imageCropAspectRatio('2.54:1')
            ->imageResizeTargetWidth('1440')
            ->imageResizeTargetHeight('568')
            ->directory('images/projects/collaborations/images')            
            ->required()
            ->columnSpanFull(),
        ])->columnSpan(1)->columns(1)
        ->collapsible()
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            ImageColumn::make('thumbnail')
            ->defaultImageUrl(url('images/bissar_concepts.webp'))->grow(false),            
            TextColumn::make('title')->sortable()->searchable(),
            TextColumn::make('type.title')
            ->label('Project Type')
            ->badge()
            ->sortable()->searchable(),
            TextColumn::make('slug')->sortable(),
            TextColumn::make('completion_date')
            ->label('Completion Date')
            ->dateTime('Y-M-d')
            ->sortable()
            ->searchable(),         
            TextColumn::make('location')
            ->searchable(),               
            TextColumn::make('year')
            ->sortable()
            ->searchable(),  
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
                Tables\Actions\DeleteAction::make()
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
            'index' => Pages\ListCollaborationProjects::route('/'),
            'create' => Pages\CreateCollaborationProject::route('/create'),
            'edit' => Pages\EditCollaborationProject::route('/{record}/edit'),
        ];
    }
}
