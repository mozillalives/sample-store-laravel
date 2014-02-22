@extends('layout')

@section('content')

@foreach($errors->all() as $m)

<p>{{ $m }}</p>

@endforeach

{{ Form::open(array('action' => 'ProductController@createOne')) }}

{{ Form::label('name') }}
{{ Form::text('name', Input::old('name')) }}<br />

{{ Form::label('price') }}
{{ Form::text('price', Input::old('price')) }}<br />

{{ Form::label('category_id') }}
{{ Form::select('category_id', $category_options, Input::old('category_id')) }}<br />

{{ Form::label('description') }}
{{ Form::textarea('description', Input::old('description')) }}<br />

{{ Form::submit("Add") }}

{{ Form::close() }}

@stop