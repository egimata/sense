@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Category</h1>
    {{-- Form Field --}}
    {!! Form::open(['action'=>['App\Http\Controllers\MenuResto\RestoMenuCategoriesController@update', $resto_category->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', $resto_category->title, ['class' => 'form-control', 'placeholder' => 'Title']) }}
        </div>
        <div class="form-group">
            {{ Form::label('short_description', 'Short Description') }}
            {{ Form::text('short_description', $resto_category->short_description, ['class' => 'form-control', 'placeholder' => 'Short Description']) }}
        </div>
        <div class="form-group">
            {{ Form::file('image') }}
        </div>
        {{ Form::hidden('_method', 'PUT') }}
        {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}



</div>
@endsection
