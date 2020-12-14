<?php

namespace App\Http\Controllers\MenuBar;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MenuCategory;
use Illuminate\Support\Facades\Storage;

class MenuCategoriesController extends Controller
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
        $menu_categories = MenuCategory::orderby('created_at', 'desc')->paginate(6);
        return view('menu-bar.menu-category.index')->with('menu_categories', $menu_categories);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu-bar.menu-category.create');
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
            'title' => 'required',
            'short_description' => 'required',
            'image' => 'image|required|max:1999',
        ]);
        // File Upload
        if ($request->hasFile('image')){
            // Get Filename with extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just Ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Store Filename | Not overwrite image with same name
            $filenameStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('public/images/menu-category', $filenameStore);
        }
        // Create
        $menu_category = new MenuCategory;
        $menu_category->title = $request->input('title');
        $menu_category->short_description = $request->input('short_description');
        $menu_category->user_id = auth()->user()->id;
        $menu_category->image = $filenameStore;
        $menu_category->save();

        return redirect('/menu-bar/menu-category/create')->with('success', 'Category Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu_category = MenuCategory::find($id);
        // check for correct user id
        if(auth()->user()->id !== $menu_category->user_id){
            return redirect('menu-bar/menu-category')->with('error', 'Unauthorized Page');
        }
        return view('menu-bar.menu-category.edit')->with('menu_category', $menu_category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'short_description' => 'required',
        ]);

        // File Upload
        if ($request->hasFile('image')){
            // Get Filename with extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just Ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Store Filename | Not overwrite image with same name
            $filenameStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('public/images/menu-category', $filenameStore);
        }
        // Create
        $menu_category = MenuCategory::find($id);
        $menu_category->title = $request->input('title');
        $menu_category->short_description = $request->input('short_description');
        $menu_category->user_id = auth()->user()->id;
        if ($request->hasFile('image')){
            Storage::delete('public/images/menu-category'.$menu_category->image);
            $menu_category->image = $filenameStore;
        }
        $menu_category->save();

        return redirect('/menu-bar/menu-category')->with('success', 'Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu_category = MenuCategory::find($id);
        if(auth()->user()->id !== $menu_category->user_id){
            return redirect ('/menu-bar/menu-category')->with('error', 'Unauthorized Page');
        }
        // Delete Image
        Storage::delete('public/images/menu-category'.$menu_category->image);
        $menu_category->delete();
        return redirect('/menu-bar/menu-category')->with('success', 'Category Deleted');
    }
}
