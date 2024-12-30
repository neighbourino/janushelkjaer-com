<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Filament\Resources\ArticleResource\RelationManagers;
use App\Models\Article;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\Concerns\Translatable;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\MarkdownEditor;

class ArticleResource extends Resource
{
    use Translatable;

    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                SpatieMediaLibraryFileUpload::make('featured_image')->collection('articles'),


                Forms\Components\TextInput::make('title')
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug'),
                Forms\Components\TextInput::make('excerpt')
                    ->maxLength(255),
                Forms\Components\MarkdownEditor::make('outline'),
                // Forms\Components\TextInput::make('description')
                //     ->maxLength(255),
                // Forms\Components\TextInput::make('short_description')
                //     ->maxLength(255),

                // Forms\Components\TextInput::make('outline'),
                Forms\Components\TextInput::make('intro')->maxLength(255),
                // Forms\Components\TextInput::make('essential_learning_points')
                //     ->maxLength(255),
                // Forms\Components\Textarea::make('body')
                //     ->columnSpanFull(),
                Builder::make('content')
                    ->blocks([
                        Builder\Block::make('heading')
                            ->schema([
                                TextInput::make('content')
                                    ->label('Heading')
                                    ->required(),
                                Select::make('level')
                                    ->options([
                                        'h1' => 'Heading 1',
                                        'h2' => 'Heading 2',
                                        'h3' => 'Heading 3',
                                        'h4' => 'Heading 4',
                                        'h5' => 'Heading 5',
                                        'h6' => 'Heading 6',
                                    ])
                                    ->required(),
                            ])
                            ->columns(2),
                        Builder\Block::make('paragraph')
                            ->schema([
                                Textarea::make('content')
                                    ->label('Paragraph')
                                    ->required(),
                            ]),
                        Builder\Block::make('image')
                            ->schema([
                                FileUpload::make('url')
                                    ->label('Image')
                                    ->image()
                                    ->required(),
                                TextInput::make('alt')
                                    ->label('Alt text')
                                    ->required(),
                            ])->columns(2),
                    ]),
                // Forms\Components\TextInput::make('key_takeaways')
                //     ->maxLength(255),
                // Forms\Components\TextInput::make('summary')
                //     ->maxLength(255),
                // Forms\Components\TextInput::make('conclusion')
                //     ->maxLength(255),
                // Forms\Components\TextInput::make('call_to_action')
                //     ->maxLength(255),
                // 
                //     ->maxLength(255),
                // Forms\Components\TextInput::make('seo_title')
                //     ->maxLength(255),
                // Forms\Components\TextInput::make('seo_description')
                //     ->maxLength(255),
                // Forms\Components\FileUpload::make('seo_image')
                //     ->image(),
                // Forms\Components\FileUpload::make('seo_image_alt')
                //     ->image(),
                // Forms\Components\FileUpload::make('seo_image_title')
                //     ->image(),
                // Forms\Components\TextInput::make('seo_canonical')
                //     ->maxLength(255),
                // Forms\Components\TextInput::make('seo_no_index')
                //     ->maxLength(255),
                // Forms\Components\TextInput::make('seo_no_follow')
                //     ->maxLength(255),
                // Forms\Components\TextInput::make('seo_no_archive')
                //     ->maxLength(255),
                // Forms\Components\TextInput::make('seo_keywords')
                //     ->maxLength(255),
                // Forms\Components\TextInput::make('user_id')
                //     ->numeric(),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('short_description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }

    public static function getTranslatableLocales(): array
    {
        return ['en', 'da'];
    }
}
