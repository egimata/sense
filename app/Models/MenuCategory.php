<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuCategory extends Model
{
    // Table
    protected $table = 'menu_categories';
    // Key
    public $primarykey = 'id';

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function menu_products()
    {
        $menu_products = MenuProduct::orderby('created_at', 'asc')->paginate(6);
        return $this->hasMany('App\Models\MenuProduct');
    }
    public function menu_sub_categories()
    {
        return $this->hasMany('App\Models\MenuSubCategory');
    }
}
