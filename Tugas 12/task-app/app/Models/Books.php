<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = 'books';
    protected $fillable = ['title', 'content', 'image', 'category_id'];

    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function Comment()
    {
        return $this->hasMany(Comment::class, 'book_id');
    }
}
