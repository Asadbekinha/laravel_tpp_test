<?php

namespace App\Domain\Persons\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname',
        'lastname',
        'fathersname',
        'phone',
        'email',
        'location',
        'image',
        'working_days',
    ];

    public function workingDays(){
        return $this->hasMany(WorkingDays::class);
    }

}
