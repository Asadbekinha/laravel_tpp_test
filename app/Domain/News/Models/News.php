<?php

namespace App\Domain\News\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'category_id'
    ];
    public function categories(){
        return $this->belongsTo(NewsCategory::class);
    }
}
