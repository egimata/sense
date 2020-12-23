<?php

namespace App\Http\Controllers\MenuResto;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RestoProduct;
use App\Models\RestoCategory;
use Illuminate\Support\Facades\Storage;

class RestoMenuProductsController extends Controller
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
        $resto_products = RestoProduct::orderby('created_at', 'desc')->paginate(9);
        return view('menu-resto.resto-product.index')->with('resto_products', $resto_products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu-resto.resto-product.create')->with('resto_categories', RestoCategory::all());
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
            'price' => 'required',
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
            $path = $request->file('image')->storeAs('public/images/resto-product', $filenameStore);
        }
        // Create
        $resto_product = new RestoProduct;
        $resto_product->title = $request->input('title');
        $resto_product->short_description = $request->input('short_description');
        $resto_product->price = $request->input('price');
        $resto_product->user_id = auth()->user()->id;
        $resto_product->resto_category_id = $request->resto_category;
        $resto_product->image = $filenameStore;
        $resto_product->save();

        return redirect('/menu-resto/resto-product/create')->with('success', 'Product Created Successfully');
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
        $resto_product = RestoProduct::find($id);
        // check for correct user id
        // if(auth()->user()->id !== $resto_category->user_id){
        //     return redirect('menu-resto/menu-category')->with('error', 'Unauthorized Page');
        // }
        return view('menu-resto.resto-product.edit')->with('resto_product', $resto_product);
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
            $path = $request->file('image')->storeAs('public/images/resto-product', $filenameStore);
        }
        // Create

        $resto_product = RestoProduct::find($id);
        $resto_product->title = $request->input('title');
        $resto_product->short_description = $request->input('short_description');
        $resto_product->price = $request->input('price');
        $resto_product->user_id = auth()->user()->id;
        if ($request->hasFile('image')){
            Storage::delete('public/images/resto-product'.$resto_product->image);
            $resto_product->image = $filenameStore;
        }
        $resto_product->save();

        return redirect('/menu-resto/resto-product')->with('success', 'Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resto_product = RestoProduct::find($id);
        // if(auth()->user()->id !== $menu_category->user_id){
        //     return redirect ('/menu-bar/menu-category')->with('error', 'Unauthorized Page');
        // }
        // Delete Image
        Storage::delete('public/images/resto-product'.$resto_product->image);
        $resto_product->delete();
        return redirect('/menu-resto/resto-product')->with('success', 'Product Deleted');
    }
}
