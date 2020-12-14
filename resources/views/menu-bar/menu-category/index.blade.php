@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="display-4">Menu Categories</h1>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <a href="{{ route('menu-category.create') }}" class="btn btn-success float-right" style="margin-top: -10px;">Create Menu Category</a>
        <h3>Categories</h3>
        @if (count($menu_categories) > 0)


        <table class="table table-striped">
            <tr>
                <th scope="col">Nr</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Nr. i Sub Kategorive</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>

            @foreach ($menu_categories as $menu_category)
                <tr>
                    <td scope="row">{{ ($menu_categories->total()-$loop->index)-(($menu_categories->currentpage()-1) * $menu_categories->perpage() ) }}</td>
                    <td scope="row"><img style="float: left; width: 100px; height: 100px; object-fit: cover;" class="card-img" src="/storage/images/menu-category/{{ $menu_category->image }}" alt=""></td>
                    <td >{{ $menu_category->title }}</td>
                    <td >{{ $menu_category->menu_sub_categories->count() }}</td>
                    <td><a class="btn btn-primary" href="/menu-bar/menu-category/{{ $menu_category->id }}/edit">Edit</a></td>
                    <td>{!! Form::open(['action' => ['App\Http\Controllers\MenuBar\MenuCategoriesController@destroy', $menu_category->id], 'method' => 'POST']) !!}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {!! Form::close() !!}</td>
                </tr>
            @endforeach

        </table>
        {{ $menu_categories->links('pagination::bootstrap-4') }}
        @else
            <p>You Have No Categories!</p>
        @endif
    </div>
</div>
@endsection
