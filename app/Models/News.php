<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category_id',
        'news_content',
        'content_file',
        'release_date'
    ];

    public function category() {
        return $this->belongsTo(Category::class)
            ->withDefault(function () {
                return new Category;
            });
    }
}
