@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create a Product</h1>
    {{-- Form Field --}}
    {!! Form::open(['action'=>'App\Http\Controllers\MenuBar\MenuProductsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title']) }}
        </div>
        <div class="form-group">
            {{ Form::label('short_description', 'Short Description') }}
            {{ Form::text('short_description', '', ['class' => 'form-control', 'placeholder' => 'Short Description']) }}
        </div>
        <div class="form-group">
            {{ Form::label('price', 'Price') }}
            {{ Form::number('price', '', ['class' => 'form-control', 'placeholder' => 'Price']) }}
        </div>
        <div class="form-group">
            <label for="menu_sub_category">Sub-Kategoria</label>
            <select name="menu_sub_category" class="form-control" id="menu_sub_category">
                @foreach($menu_sub_categories as $menu_sub_category)
                    <option value="{{$menu_sub_category->id}}"
                        @if (isset($menu_sub_category))
                            @if ($menu_sub_category->id === $menu_sub_category->menu_sub_category_id)
                                selected
                            @endif
                        @endif
                        >{{$menu_sub_category->title}}
                    </option>
                @endforeach
            </select>
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
        <div class="form-group">
            {{ Form::file('image') }}
        </div>
        {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}

</div>
@endsection
