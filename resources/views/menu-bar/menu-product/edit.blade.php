@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Product</h1>
    {{-- Form Field --}}
    {!! Form::open(['action'=>['App\Http\Controllers\MenuBar\MenuProductsController@update', $menu_product->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', $menu_product->title, ['class' => 'form-control', 'placeholder' => 'Title']) }}
        </div>
        <div class="form-group">
            {{ Form::label('short_description', 'Short Description') }}
            {{ Form::text('short_description', $menu_product->short_description, ['class' => 'form-control', 'placeholder' => 'Short Description']) }}
        </div>
        <div class="form-group">
            {{ Form::label('price', 'Price') }}
            {{ Form::number('price', $menu_product->price, ['class' => 'form-control', 'placeholder' => 'Price']) }}
        </div>
        <div class="form-group">
            <label for="menu_sub_category">Kategoria</label>
            <select name="menu_sub_category" class="form-control" id="menu_sub_category">
                @foreach($menu_sub_categories as $menu_sub_category)
                    <option value="{{$menu_sub_category->id}}"
                        @if (isset($menu_product))
                            @if ($menu_sub_category->id === $menu_product->menu_sub_category_id)
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
                        @if (isset($menu_product))
                            @if ($menu_category->id === $menu_product->menu_category_id)
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
        {{ Form::hidden('_method', 'PUT') }}
        {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}



</div>
@endsection
