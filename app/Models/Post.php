<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Post extends BaseModel implements HasMedia
{
    use HasTranslations;
    use InteractsWithMedia;
    protected $translatable = ['title', 'slug', 'content', 'short_description', 'seo', 'meta'];

    protected $dates = [
        'published_at'
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('preview')
            ->width(368)
            ->height(232)
            ->fit(Fit::CROP);
    }
}
