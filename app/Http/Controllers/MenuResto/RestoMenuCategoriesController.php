<?php

namespace App\Http\Controllers\MenuResto;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RestoCategory;
use Illuminate\Support\Facades\Storage;

class RestoMenuCategoriesController extends Controller
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
        $resto_categories = RestoCategory::orderby('created_at', 'desc')->paginate(9);
        return view('menu-resto.resto-category.index')->with('resto_categories', $resto_categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu-resto.resto-category.create');
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
            $path = $request->file('image')->storeAs('public/images/resto-category', $filenameStore);
        }
        // Create
        $resto_category = new RestoCategory;
        $resto_category->title = $request->input('title');
        $resto_category->short_description = $request->input('short_description');
        $resto_category->user_id = auth()->user()->id;
        $resto_category->image = $filenameStore;
        $resto_category->save();

        return redirect('/menu-resto/resto-category/create')->with('success', 'Category Created Successfully');
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
        $resto_category = RestoCategory::find($id);
        // check for correct user id
        // if(auth()->user()->id !== $resto_category->user_id){
        //     return redirect('menu-resto/menu-category')->with('error', 'Unauthorized Page');
        // }
        return view('menu-resto.resto-category.edit')->with('resto_category', $resto_category);
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
            $path = $request->file('image')->storeAs('public/images/resto-category', $filenameStore);
        }
        // Create

        $resto_category = RestoCategory::find($id);
        $resto_category->title = $request->input('title');
        $resto_category->short_description = $request->input('short_description');
        $resto_category->user_id = auth()->user()->id;
        if ($request->hasFile('image')){
            Storage::delete('public/images/resto-category'.$resto_category->image);
            $resto_category->image = $filenameStore;
        }
        $resto_category->save();

        return redirect('/menu-resto/resto-category')->with('success', 'Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resto_category = RestoCategory::find($id);
        // if(auth()->user()->id !== $menu_category->user_id){
        //     return redirect ('/menu-bar/menu-category')->with('error', 'Unauthorized Page');
        // }
        // Delete Image
        Storage::delete('public/images/resto-category'.$resto_category->image);
        $resto_category->delete();
        return redirect('/menu-resto/resto-category')->with('success', 'Category Deleted');
    }
}
