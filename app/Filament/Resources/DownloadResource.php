<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DownloadResource\Pages;
use App\Filament\Resources\DownloadResource\RelationManagers;
use App\Models\Download;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Resources\Concerns\Translatable;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use App\Filament\BlockGroups\Properties;
use App\Filament\BlockGroups\RichContent;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class DownloadResource extends Resource
{
    use Translatable;

    protected static ?string $model = Download::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                ...Properties::make($form),
                RichContent::builder($form)->columnSpanFull(),
                SpatieMediaLibraryFileUpload::make('featured_image')->collection('downloads'),
                FileUpload::make('file_path')->disk('public')->directory('downloads'),
                TextInput::make('file_name'),
                TextInput::make('file_extension'),
                TextInput::make('file_size'),
                TextInput::make('file_type'),
                TextInput::make('file_url'),
                TextInput::make('file_description'),
                TextInput::make('file_keywords'),
                TextInput::make('file_tags'),
                TextInput::make('file_category'),
                TextInput::make('file_subcategory'),
                TextInput::make('link_to_product_page'),
                TextInput::make('category'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('featured_image')->collection('downloads'),
                TextColumn::make('title'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
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
            'index' => Pages\ListDownloads::route('/'),
            'create' => Pages\CreateDownload::route('/create'),
            'edit' => Pages\EditDownload::route('/{record}/edit'),
        ];
    }

    public static function getTranslatableLocales(): array
    {
        return ['en', 'ar'];
    }
}
