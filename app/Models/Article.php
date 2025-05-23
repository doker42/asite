<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'content',
        'published'
    ];

    public function images()
    {
        return $this->hasMany(ArticleImage::class);
    }


    protected function scopePublished(Builder $query)
    {
        $query->where('published', 1);
    }
}
