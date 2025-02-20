<?php

namespace App\Models;

use App\Models\BaseModel;
use Spatie\Translatable\HasTranslations;

class Download extends BaseModel
{

    use HasTranslations;
    protected $translatable = [
        'title',
        'slug',
        'content',
        'short_description',
        'seo',
        'meta',
        'link_to_product_page',
        'category',
        'file_description',
        'file_keywords',
        'file_tags',
        'file_category',
        'file_subcategory',
        'file_name',
        'file_extension',
        'file_size',
        'file_type',
        'file_url',
        'file_path',
    ];
}
