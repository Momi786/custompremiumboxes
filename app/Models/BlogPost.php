<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class BlogPost extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'featured_image',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'author_name',
        'published_at',
        'is_active',
        'is_featured',
        'views_count',
        'sort_order',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'is_active' => 'boolean',
        'is_featured' => 'boolean',
        'views_count' => 'integer',
        'sort_order' => 'integer',
    ];

    /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            if (empty($post->slug)) {
                $post->slug = Str::slug($post->title);
            }
        });

        static::updating(function ($post) {
            if ($post->isDirty('title') && empty($post->slug)) {
                $post->slug = Str::slug($post->title);
            }
        });
    }

    /**
     * Get the categories that this blog post belongs to.
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(BlogCategory::class)
            ->withPivot('sort_order')
            ->withTimestamps()
            ->orderByPivot('sort_order');
    }

    /**
     * Get the URL for the featured image.
     */
    public function getFeaturedImageUrlAttribute(): ?string
    {
        if (! $this->featured_image) {
            return null;
        }

        // If it's already a full URL, return it
        if (filter_var($this->featured_image, FILTER_VALIDATE_URL)) {
            return $this->featured_image;
        }

        // Use asset() for files in public storage (works with storage link)
        return asset('storage/'.$this->featured_image);
    }

    /**
     * Scope a query to only include published posts.
     */
    public function scopePublished($query): \Illuminate\Database\Eloquent\Builder
    {
        return $query->where('is_active', true)
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now());
    }

    /**
     * Increment the views count.
     */
    public function incrementViews(): void
    {
        $this->increment('views_count');
    }
}
