<?php

namespace App\Filament\Resources\ArticleResource\Pages;

use Filament\Actions;
use Filament\Actions\LocaleSwitcher;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\ArticleResource;

class CreateArticle extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = ArticleResource::class;


    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make()
        ];
    }
}
