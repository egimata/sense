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
        <a href="{{ route('resto-product.create') }}" class="btn btn-success float-right" style="margin-top: -10px;">Create a Product</a>
        <h3>Products</h3>
        @if (count($resto_products) > 0)


        <table class="table table-striped">
            <tr>
                <th scope="col">Nr</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Kategoria</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            @foreach ($resto_products as $resto_product)
                <tr>
                    <td scope="row">{{ ($resto_products->total()-$loop->index)-(($resto_products->currentpage()-1) * $resto_products->perpage() ) }}</td>
                    <td scope="row"><img style="float: left; width: 100px; height: 100px; object-fit: cover;" class="card-img" src="{{ asset('storage/images/resto-product/'.$resto_product->image) }}" alt=""></td>
                    <td >{{ $resto_product->title }}</td>
                    <td >{{ $resto_product->price }}</td>
                    <td ><a href="{{ route('resto-category.index', $resto_product->resto_product_id) }}">{{ $resto_product->resto_category->title }}</a></td>
                    <td><a class="btn btn-primary" href="/menu-resto/resto-product/{{ $resto_product->id }}/edit">Edit</a></td>
                    <td>{!! Form::open(['action' => ['App\Http\Controllers\MenuResto\RestoMenuProductsController@destroy', $resto_product->id], 'method' => 'POST']) !!}
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
