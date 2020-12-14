<?php

namespace App\Http\Controllers\MenuBar;

use App\Http\Controllers\Controller;
use App\Models\MenuProduct;
use App\Models\MenuCategory;
use App\Models\MenuSubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuProductsController extends Controller
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
        $menu_products = MenuProduct::orderby('created_at', 'desc')->paginate(6);
        return view('menu-bar.menu-product.index')->with('menu_products', $menu_products)->with('menu_categories', MenuCategory::all());
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu-bar.menu-product.create')
        ->with('menu_categories', MenuCategory::all())
        ->with('menu_sub_categories', MenuSubCategory::all());
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
            'price' => 'required',
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
            $path = $request->file('image')->storeAs('public/images/menu-products', $filenameStore);
        }
        // Create
        $menu_product = new MenuProduct;
        $menu_product->title = $request->input('title');
        $menu_product->short_description = $request->input('short_description');
        $menu_product->price = $request->input('price');
        $menu_product->user_id = auth()->user()->id;
        $menu_product->menu_category_id = $request->menu_category;
        $menu_product->menu_sub_category_id = $request->menu_sub_category;
        $menu_product->image = $filenameStore;
        $menu_product->save();

        return redirect('/menu-bar/menu-product/create')->with('success', 'Product Created Successfully');
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
        $menu_product = MenuSubCategory::find($id);
        // check for correct user id
        if(auth()->user()->id !== $menu_product->user_id){
            return redirect('menu-bar/menu-product')->with('error', 'Unauthorized Page');
        }
        return view('menu-product.edit')->with('menu_product', $menu_product);
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
            'price' => 'required',
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
            $path = $request->file('image')->storeAs('public/images/menu-products', $filenameStore);
        }
        // Create
        $menu_product = MenuProduct::find($id);
        $menu_product->title = $request->input('title');
        $menu_product->short_description = $request->input('short_description');
        $menu_product->price = $request->input('price');
        $menu_product->user_id = auth()->user()->id;
        $menu_product->menu_category_id = $request->menu_category;
        $menu_product->menu_sub_category_id = $request->menu_sub_category;
        if ($request->hasFile('image')){
            Storage::delete('public/images/menu-products'.$menu_product->image);
            $menu_product->image = $filenameStore;
        }
        $menu_product->save();

        return redirect('/menu-bar/menu-product')->with('success', 'Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu_product = MenuCategory::find($id);
        if(auth()->user()->id !== $menu_product->user_id){
            return redirect ('/menu-bar/menu-product')->with('error', 'Unauthorized Page');
        }
        // Delete Image
        Storage::delete('public/images/menu-products'.$menu_product->image);
        $menu_product->delete();
        return redirect('/menu-bar/menu-product')->with('success', 'Product Deleted');
    }
}
