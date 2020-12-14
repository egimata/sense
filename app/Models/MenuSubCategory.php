<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuSubCategory extends Model
{
    // Table
    protected $table = 'menu_sub_categories';
    // Key
    public $primarykey = 'id';

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function menu_category()
    {
        return $this->belongsTo('App\Models\MenuCategory');
    }
    public function menu_products()
    {
        return $this->hasMany('App\Models\MenuProduct');
    }
}
