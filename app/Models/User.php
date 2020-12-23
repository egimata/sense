<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function menu_categories()
    {
        return $this->hasMany('App\Models\MenuCategory');
    }
    public function menu_sub_categories()
    {
        return $this->hasMany('App\Models\MenuSubCategory');
    }
    public function menu_products()
    {
        return $this->hasMany('App\Models\MenuProduct');
    }
    public function resto_categories()
    {
        return $this->hasMany('App\Models\RestoCategory');
    }
    public function resto_products()
    {
        return $this->hasMany('App\Models\RestoProduct');
    }
}
