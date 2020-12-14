@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="display-4">All Products</h1>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <a href="{{ route('menu-product.create') }}" class="btn btn-success float-right" style="margin-top: -10px;">Create a Product</a>
        <h3>Products</h3>
        @if (count($menu_products) > 0)


        <table class="table table-striped">
            <tr>
                <th scope="col">Nr</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Sub-Category</th>
                <th scope="col">Kategoria</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>

            @foreach ($menu_products as $menu_product)
                <tr>
                    <td scope="row">{{ ($menu_products->total()-$loop->index)-(($menu_products->currentpage()-1) * $menu_products->perpage() ) }}</td>
                    <td scope="row"><img style="float: left; width: 100px; height: 100px; object-fit: cover;" class="card-img" src="{{ asset('storage/images/menu-products/'.$menu_product->image) }}" alt=""></td>
                    <td >{{ $menu_product->title }}</td>
                    <td >{{ $menu_product->price }}</td>
                    {{-- @if (count($) > 0) --}}
                    <td ><a href="{{ route('menu-subcategory.index', $menu_product->menu_sub_category_id) }}">{{ $menu_product->menu_sub_category->title }}</a></td>
                    {{-- @else
                        <p>No Sub Category</p>
                    @endif --}}
                    <td ><a href="{{ route('menu-category.index', $menu_product->menu_category_id) }}">{{ $menu_product->menu_category->title }}</a></td>
                    <td><a class="btn btn-primary" href="/menu-bar/menu-product/{{ $menu_product->id }}/edit">Edit</a></td>
                    <td>{!! Form::open(['action' => ['App\Http\Controllers\MenuBar\MenuProductsController@destroy', $menu_product->id], 'method' => 'POST']) !!}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {!! Form::close() !!}</td>
                </tr>
            @endforeach

        </table>
        {{ $menu_products->links('pagination::bootstrap-4') }}
        @else
            <p>You Have No Products!</p>
        @endif
    </div>
</div>
@endsection
