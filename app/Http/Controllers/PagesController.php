<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuCategory;
use App\Models\MenuSubCategory;
use App\Models\MenuProduct;
use App\Models\RestoProduct;
use App\Models\RestoCategory;

class PagesController extends Controller
{
    public function index(MenuCategory $menu_category)
    {
        $menu_categories = MenuCategory::orderby('created_at', 'asc')->paginate(6);
        // $menu_category = MenuCategory::where('id', true)->with(['menu_products' => function($q){
        //     $q->orderby('created_at', 'asc')->paginate(6);
        // }])->first();
        return view('pages.index')
        ->with('menu_categories', $menu_categories)
        ->with('menu_category', $menu_category);
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
    public function resto()
    {
        $resto_categories = RestoCategory::all();
        $resto_category = RestoCategory::first();
        $resto_products = RestoProduct::all();
        return view('pages.resto')
        ->with('resto_categories', $resto_categories)
        ->with('resto_products', $resto_products)
        ->with('resto_category', $resto_category);
    }
    public function contact()
    {
        return view('pages.contact');
    }
}
