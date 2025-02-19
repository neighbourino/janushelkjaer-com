<?php

namespace App\Models;

use App\Models\BaseModel;

use Spatie\Translatable\HasTranslations;

class Service extends BaseModel
{
    use HasTranslations;

    protected $translatable = ['title', 'slug', 'content', 'short_description', 'seo', 'meta'];
}
