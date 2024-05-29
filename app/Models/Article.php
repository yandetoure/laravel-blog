<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'author', 'image_path', 'featured'];

    // Optionnel : Scope pour obtenir les articles à la une
    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }
}

