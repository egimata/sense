<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestoProduct extends Model
{
    // Table
    protected $table = 'resto_products';
    // Key
    public $primarykey = 'id';

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function resto_category()
    {
        return $this->belongsTo('App\Models\RestoCategory');
    }
}
