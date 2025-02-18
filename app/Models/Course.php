<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Course extends BaseModel
{
    use HasTranslations;
    protected $translatable = ['title', 'slug', 'content', 'short_description', 'seo', 'meta', 'link_to_course'];
}
