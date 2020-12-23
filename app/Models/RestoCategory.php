<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestoCategory extends Model
{
    // Table
    protected $table = 'resto_categories';
    // Key
    public $primarykey = 'id';

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function resto_products()
    {
        return $this->hasMany('App\Models\RestoProduct');
    }
}
