<?php

namespace App\Http\Controllers\MenuBar;

use App\Http\Controllers\Controller;
use App\Models\MenuSubCategory;
use App\Models\MenuCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuSubCategoriesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu_sub_categories = MenuSubCategory::orderby('created_at', 'desc')->paginate(6);
        return view('menu-bar.menu-subcategory.index')->with('menu_sub_categories', $menu_sub_categories);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu-bar.menu-subcategory.create')->with('menu_categories', MenuCategory::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required'
        ]);
        // Create
        $menu_sub_category = new MenuSubCategory;
        $menu_sub_category->title = $request->input('title');
        $menu_sub_category->user_id = auth()->user()->id;
        $menu_sub_category->menu_category_id = $request->menu_category;
        $menu_sub_category->save();

        return redirect('/menu-bar/menu-subcategory/create')->with('success', 'Sub Category Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MenuSubCategory  $menuSubCategory
     * @return \Illuminate\Http\Response
     */
    public function show(MenuSubCategory $menuSubCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MenuSubCategory  $menuSubCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu_sub_category = MenuCategory::find($id);
        // check for correct user id
        if(auth()->user()->id !== $menu_sub_category->user_id){
            return redirect('menu-bar/menu-subcategory')->with('error', 'Unauthorized Page');
        }
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MenuSubCategory  $menuSubCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MenuSubCategory $menuSubCategory)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);
        // Create
        $menu_sub_category = MenuSubCategory::find($id);
        $menu_sub_category->title = $request->input('title');
        $menu_sub_category->user_id = auth()->user()->id;
        $menu_sub_category->menu_category_id = $request->menu_category;
        $menu_sub_category->save();

        return redirect('/menu-bar/menu-subcategory')->with('success', 'Sub Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MenuSubCategory  $menuSubCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuSubCategory $menuSubCategory)
    {
        $menu_sub_category = MenuCategory::find($id);
        if(auth()->user()->id !== $menu_sub_category->user_id){
            return redirect ('/menu-bar/menu-subcategory')->with('error', 'Unauthorized Page');
        }
        $menu_sub_category->delete();
        return redirect('/menu-bar/menu-subcategory')->with('success', 'Sub Category Deleted');
    }
}
