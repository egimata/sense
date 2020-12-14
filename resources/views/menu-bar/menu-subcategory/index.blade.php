@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="display-4">All Sub-Categories</h1>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <a href="{{ route('menu-subcategory.create') }}" class="btn btn-success float-right" style="margin-top: -10px;">Create Sub-Category</a>
        <h3>Sub-Categories</h3>
        @if (count($menu_sub_categories) > 0)


        <table class="table table-striped">
            <tr>
                <th scope="col">Nr</th>
                <th scope="col">Title</th>
                <th scope="col">Kategoria</th>
                <th scope="col">Nr. i Produkteve</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>

            @foreach ($menu_sub_categories as $menu_sub_category)
                <tr>
                    <td scope="row">{{ ($menu_sub_categories->total()-$loop->index)-(($menu_sub_categories->currentpage()-1) * $menu_sub_categories->perpage() ) }}</td>
                    <td >{{ $menu_sub_category->title }}</td>
                    <td ><a href="{{ route('menu-category.index', $menu_sub_category->menu_category_id) }}">{{ $menu_sub_category->menu_category->title }}</a></td>
                    <td >{{ $menu_sub_category->menu_products->count() }}</td>
                    <td><a class="btn btn-primary" href="/menu-bar/menu-subcategory/{{ $menu_sub_category->id }}/edit">Edit</a></td>
                    <td>{!! Form::open(['action' => ['App\Http\Controllers\MenuBar\MenuSubCategoriesController@destroy', $menu_sub_category->id], 'method' => 'POST']) !!}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {!! Form::close() !!}</td>
                </tr>
            @endforeach

        </table>
        {{ $menu_sub_categories->links('pagination::bootstrap-4') }}
        @else
            <p>You Have No Sub Categories!</p>
        @endif
    </div>
</div>
@endsection
