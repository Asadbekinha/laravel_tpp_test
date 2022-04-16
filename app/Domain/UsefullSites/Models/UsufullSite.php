<?php

namespace App\Domain\UsefullSites\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsufullSite extends Model
{
    use HasFactory;
    protected $fillable= [
        'title',
        'url'
    ];
}
