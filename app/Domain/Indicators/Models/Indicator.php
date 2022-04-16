<?php

namespace App\Domain\Indicators\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indicator extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'amount',
        'unit',
        'icon_class'
    ];
}
