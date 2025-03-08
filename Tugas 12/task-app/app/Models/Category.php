<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name', 'description'];

    public function Books()
    {
        return $this->hasMany(Books::class, 'category_id');
    }
}
