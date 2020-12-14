@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create a Sub Category</h1>
    {{-- Form Field --}}
    {!! Form::open(['action'=>'App\Http\Controllers\MenuBar\MenuSubCategoriesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title']) }}
        </div>
        <div class="form-group">
            <label for="menu_category">Kategoria</label>
            <select name="menu_category" class="form-control" id="menu_category">
                @foreach($menu_categories as $menu_category)
                    <option value="{{$menu_category->id}}"
                        @if (isset($menu_category))
                            @if ($menu_category->id === $menu_category->menu_category_id)
                                selected
                            @endif
                        @endif
                        >{{$menu_category->title}}
                    </option>
                @endforeach
            </select>
        </div>
        {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}

</div>
@endsection
