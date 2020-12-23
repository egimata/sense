@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Product</h1>
    {{-- Form Field --}}
    {!! Form::open(['action'=>['App\Http\Controllers\MenuResto\RestoMenuProductsController@update', $resto_product->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', $resto_product->title, ['class' => 'form-control', 'placeholder' => 'Title']) }}
        </div>
        <div class="form-group">
            {{ Form::label('short_description', 'Short Description') }}
            {{ Form::text('short_description', $resto_product->short_description, ['class' => 'form-control', 'placeholder' => 'Short Description']) }}
        </div>
        <div class="form-group">
            {{ Form::label('price', 'Price') }}
            {{ Form::number('price', $resto_product->price, ['class' => 'form-control', 'placeholder' => 'Price']) }}
        </div>
        <div class="form-group">
            <label for="resto_category">Kategoria</label>
            <select name="resto_category" class="form-control" id="resto_category">
                @foreach($resto_categories as $resto_category)
                    <option value="{{$resto_category->id}}"
                        @if (isset($resto_product))
                            @if ($resto_category->id === $resto_product->resto_category_id)
                                selected
                            @endif
                        @endif
                        >{{$resto_category->title}}
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
