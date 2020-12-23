@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="display-4">Restaurant Categories</h1>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <a href="{{ route('resto-category.create') }}" class="btn btn-success float-right" style="margin-top: -10px;">Create Restaurant Category</a>
        <h3>Categories</h3>
        @if (count($resto_categories) > 0)

        <table class="table table-striped">
            <tr>
                <th scope="col">Nr</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Nr. i Produkteve</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>

            @foreach ($resto_categories as $resto_category)
                <tr>
                    <td scope="row">{{ ($resto_categories->total()-$loop->index)-(($resto_categories->currentpage()-1) * $resto_categories->perpage() ) }}</td>
                    <td scope="row"><img style="float: left; width: 100px; height: 100px; object-fit: cover;" class="card-img" src="/storage/images/menu-category/{{ $menu_category->image }}" alt=""></td>
                    <td >{{ $resto_category->title }}</td>
                    <td >{{ $resto_category->resto_categories->count() }}</td>
                    <td><a class="btn btn-primary" href="/menu-resto/resto-category/{{ $resto_category->id }}/edit">Edit</a></td>
                    <td>{!! Form::open(['action' => ['App\Http\Controllers\MenuResto\RestoMenuCategoriesController@destroy', $resto_category->id], 'method' => 'POST']) !!}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {!! Form::close() !!}</td>
                </tr>
            @endforeach

        </table>
        {{ $resto_categories->links('pagination::bootstrap-4') }}
        @else
            <p>You Have No Categories!</p>
        @endif
    </div>
</div>
@endsection
