@extends('layout')

@section('content')

@foreach($errors->all() as $m)

<div class="alert alert-danger">
    {{ $m }}
</div>

@endforeach

{{ Form::open(array('action' => array('ProductController@updateOne', $product->id), 'class' => 'rows')) }}

{{ Form::hidden('id', $product->id) }}

<div class="input-group col-lg-4 {{ $errors->has('name') ? "has-error" : "" }}">
{{ Form::text('name', $product->name, array('class' => 'form-control', 'placeholder' => 'Name')) }}
</div>

<div class="input-group col-lg-4 {{ $errors->has('price') ? "has-error" : "" }}">
<span class="input-group-addon">$</span>
{{ Form::text('price', number_format((float)$product->price, 2), array('class' => 'form-control', 'placeholder' => 'Price')) }}
</div>

<div class="input-group col-lg-4 {{ $errors->has('category_id') ? "has-error" : "" }}">
{{ Form::select('category_id', $category_options, $product->category_id, array('class' => 'form-control')) }}
</div>

<div class="input-group col-lg-4 {{ $errors->has('description') ? "has-error" : "" }}">
{{ Form::textarea('description', $product->description, array('class' => 'form-control', 'placeholder' => 'Description')) }}
</div>

<div class="input-group col-lg-4">
{{ Form::submit("Update", array('class' => 'btn btn-primary')) }}
</div>

{{ Form::close() }}

@stop