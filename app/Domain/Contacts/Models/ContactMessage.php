<?php

namespace App\Domain\Contacts\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $table = 'contact_messages';
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'email',
        'message'
    ];
}
