<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['user_id', 'category_id', 'title', 'slug' ,'content', 'is_draft','view_count', 'comment_count', 'vote_count'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
