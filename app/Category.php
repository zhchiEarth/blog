<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = ['name', 'article_count', 'weight', 'description'];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
