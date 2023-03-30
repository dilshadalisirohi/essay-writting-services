<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function relatedArticles()
    {
        return $this->belongsToMany(Article::class, 'related_article_pivot', 'parent_id', 'related_id');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->orderBy('created_at', 'desc');;
    }

    public function faqs()
    {
        return $this->hasMany(FaqArticle::class, 'review_id', 'id');
    }

    public function pros()
    {
        return $this->hasMany(ProsAndConsArticle::class, 'article_id')->where('is_pro', 1);
    }

    public function cons()
    {
        return $this->hasMany(ProsAndConsArticle::class, 'article_id')->where('is_pro', 0);
    }

}
