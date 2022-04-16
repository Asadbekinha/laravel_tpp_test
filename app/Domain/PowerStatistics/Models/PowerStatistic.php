<?php

namespace App\Domain\PowerStatistics\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PowerStatistic extends Model
{
    use HasFactory;
    protected $fillable = [
        'region_id',
        'quantity'
    ];
}
