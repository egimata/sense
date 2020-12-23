@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Category</h1>
    {{-- Form Field --}}
    {!! Form::open(['action'=>['App\Http\Controllers\MenuResto\RestoMenuCategoriesController@store'], 'method' => 'POST', 'id' => 'dynamic_form' , 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title']) }}
        </div>
        <div class="form-group">
            {{ Form::label('short_description', 'Short Description') }}
            {{ Form::text('short_description', '', ['class' => 'form-control', 'placeholder' => 'Short Description']) }}
        </div>
        <div class="form-group">
            {{ Form::file('image') }}
        </div>
        {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}



</div>
@endsection
