<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;


class Post extends Model
{
    use HasFactory, SoftDeletes, HasSlug;

    protected $table = "posts";

    protected $fillable = [
        'title',
        'slug_title',
        'user_id',
        'user_name',
        'post_content',
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:00',
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug_title')
            ->slugsShouldBeNoLongerThan(50);;
    }

    public function getRouteKeyName()
    {
        return 'slug_title';
    }



}
