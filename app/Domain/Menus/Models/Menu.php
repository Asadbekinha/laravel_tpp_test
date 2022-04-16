<?php

namespace App\Domain\Menus\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'parent_id',
    ];
    public function childMenus(){
        return $this->hasMany(Menu::class, 'parent_id', 'id');
    }
    public function child()
    {
        return $this->childMenus()->with('child');
    }
}
