<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuCategory;
use App\Models\MenuSubCategory;
use App\Models\MenuProduct;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function menu()
    {
        $menu_categories = MenuCategory::all();
        $menu_category = MenuCategory::first();
        $menu_sub_categories = MenuSubCategory::all();
        $menu_products = MenuProduct::all();
        return view('pages.menu')
        ->with('menu_categories', $menu_categories)
        ->with('menu_sub_categories', $menu_sub_categories)
        ->with('menu_products', $menu_products)
        ->with('menu_category', $menu_category);
    }
}
