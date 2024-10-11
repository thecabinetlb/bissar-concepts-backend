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
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Illuminate\Support\Str;

class CollaborationProjectResource extends Resource
{
    protected static ?string $model = CollaborationProject::class;

    protected static ?string $navigationGroup = 'Projects';

    public static function getNavigationSort(): ?int
    {
        return 1; // Order this resource as the first item in the group
    }

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
        Section::make('Create a Collaboration Project')
        ->description('fill out your collaboration project info.')
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
            TextInput::make('category')
            ->placeholder("What's the project's catefory?")
            ->required()
            ->columnSpanFull(),            
            RichEditor::make('description')
            ->required()
            ->columnSpanFull(),
            TextInput::make('location')->minLength(1)->maxLength(150)->required(),
            TextInput::make('year')->required(),              
            TextInput::make('client')->minLength(1)->maxLength(150)->required(),
            TagsInput::make('architects')
            ->placeholder(' '),
        ])->columnSpan(1)->columns(2)
        ->collapsible(),

        Section::make('Project Images')
        ->description('Add the banner, carousel and thumbnail images of your collaboration project.')
        ->schema([
            FileUpload::make('thumbnail')
            ->name('Thumbnail Image')
            ->image()
            ->preserveFilenames()
            ->imageEditor()     
            ->directory('uploads/projects/collaborations/thumbnails')            
            ->disk('public')
            ->required()
            ->columnSpanFull(),
            FileUpload::make('banner')
            ->name('Banner Image')
            ->image()
            ->preserveFilenames()
            ->imageEditor()  
            ->directory('uploads/projects/collaborations/banners')            
            ->disk('public')
            ->required()
            ->columnSpanFull(),
            FileUpload::make('images')
            ->name('Carousel Images')
            ->image()
            ->preserveFilenames()
            ->multiple()
            ->reorderable()
            ->imageEditor()      
            ->directory('uploads/projects/collaborations/images')            
            ->disk('public')
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
            ImageColumn::make('thumbnail')->grow(false),            
            TextColumn::make('title')->sortable()->searchable(),
            TextColumn::make('category')
            ->badge()
            ->sortable()->searchable(),
            TextColumn::make('slug')->sortable(),         
            TextColumn::make('location')->searchable(),     
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
