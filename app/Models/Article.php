<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Article extends Model implements HasMedia
{
    use HasTranslations;
    use InteractsWithMedia;
    use HasSlug;

    protected $guarded = [];
    protected $casts = [
        'outline' => 'array',
        'content' => 'array',
    ];

    public $translatable = [
        'title',
        'description',
        'short_description',
        'excerpt',
        'intro',
        'essential_learning_points',
        'body',
        'key_takeaways',
        'summary',
        'conclusion',
        'call_to_action',
        'seo_title',
        'seo_description',
        'seo_image_alt',
        'seo_image_title',
        'seo_canonical',
        'seo_no_index',
        'seo_no_follow',
        'seo_no_archive',
        'seo_keywords',
    ];

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Fit::Contain, 300, 300)
            ->nonQueued();
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }
}
