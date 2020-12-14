<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuProduct extends Model
{
    // Table
    protected $table = 'menu_products';
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
    public function menu_sub_category()
    {
        return $this->belongsTo('App\Models\MenuSubCategory');
    }
}
