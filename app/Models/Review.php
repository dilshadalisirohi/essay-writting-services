<?php

namespace App\Models;

use App\Models\Faq;
use App\Models\ProsAndCons;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function relatedPosts()
    {
        return $this->belongsToMany(Review::class, 'related_review_pivot', 'parent_id', 'related_id');
    }

    public function faqs()
    {
        return $this->hasMany(Faq::class, 'review_id', 'id');
    }

    public function pros()
    {
        return $this->hasMany(ProsAndCons::class, 'review_id')->where('is_pro', 1);
    }

    public function cons()
    {
        return $this->hasMany(ProsAndCons::class, 'review_id')->where('is_pro', 0);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->orderBy('created_at', 'desc');
    }

}
