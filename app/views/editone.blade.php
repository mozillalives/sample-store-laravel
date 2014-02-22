@extends('layout')

@section('content')

@foreach($errors->all() as $m)

<p>{{ $m }}</p>

@endforeach

{{ Form::open(array('action' => array('ProductController@updateOne', $product->id))) }}

{{ Form::hidden('id', $product->id) }}

{{ Form::label('name') }}
{{ Form::text('name', $product->name) }}<br />

{{ Form::label('price') }}
{{ Form::text('price', $product->price) }}<br />

{{ Form::label('category_id') }}
{{ Form::select('category_id', $category_options, $product->category_id) }}<br />

{{ Form::label('description') }}
{{ Form::textarea('description', $product->description) }}<br />

{{ Form::submit("Update") }}

{{ Form::close() }}

@stop