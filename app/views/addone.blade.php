@extends('layout')

@section('content')

@foreach($errors->all() as $m)

<div class="alert alert-danger">
    {{ $m }}
</div>

@endforeach

{{ Form::open(array('action' => 'ProductController@createOne', 'class' => 'rows')) }}

<div class="input-group col-lg-4 {{ $errors->has('name') ? "has-error" : "" }}">
{{ Form::text('name', Input::old('name'), array('class' => 'form-control', 'placeholder' => 'Name')) }}
</div>

<div class="input-group col-lg-4 {{ $errors->has('price') ? "has-error" : "" }}">
<span class="input-group-addon">$</span>
{{ Form::text('price', number_format((float)Input::old('price'), 2), array('class' => 'form-control', 'placeholder' => 'Price')) }}
</div>

<div class="input-group col-lg-4 {{ $errors->has('category_id') ? "has-error" : "" }}">
{{ Form::select('category_id', $category_options, Input::old('category_id'), array('class' => 'form-control')) }}
</div>

<div class="input-group col-lg-4 {{ $errors->has('description') ? "has-error" : "" }}">
{{ Form::textarea('description', Input::old('description'), array('class' => 'form-control', 'placeholder' => 'Description')) }}
</div>

<div class="input-group col-lg-4">
{{ Form::submit("Add", array('class' => 'btn btn-primary')) }}
</div>

{{ Form::close() }}

@stop