<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Article extends Model
{
    use HasFactory, HasSlug;

    public const STATUS_DRAFT = 'draft';
    public const STATUS_PUBLISHED = 'published';
    public const SHORT_DESCRIPTION_LENGTH = 100;

    protected $guarded = ['id'];
    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug')
            ->slugsShouldBeNoLongerThan(50);
    }

    public function getShortDescriptionAttribute(): string
    {
        return Str::limit($this->description, Article::SHORT_DESCRIPTION_LENGTH);
    }

    public function getFormattedPublishedAtAttribute(): string
    {
        return $this->published_at->format('d.m.Y');
    }
}
