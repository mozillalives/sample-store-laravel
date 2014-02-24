@extends('layout')

@section('content')
<div class="table-responsive">
<table class="table table-striped">
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th colspan="2">Actions</th>
    </tr>
    @foreach($products as $p)
    <tr>
        <td title="{{ $p->description }}">{{ $p->name }}</td>
        <td>${{ number_format($p->price, 2) }}</td>
        <td><a class="btn btn-primary" href="{{ URL::action('ProductController@editOne', array($p->id)) }}">Edit</a></td>
        <td><a class="btn btn-danger delete-btn" id="product-{{ $p->id }}" href="#">Delete</a></td>
    </tr>
    @endforeach
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td><a class="btn btn-default" href="{{ URL::action('ProductController@showAddOne') }}">Add One</a></td>
    </tr>
    
</table>
</div>
@stop

@section('extrajs')

<script type="text/javascript" charset="utf-8">

$(document).ready(function() {
    
    function delete_product(url) 
    {
        $.post(url, function() {
            $("#ajax-result-msg").html('<div class="alert alert-success">product deleted</div>');
            window.location = "/list";
        })
        .fail(function() {
            $("#ajax-result-msg").html('<div class="alert alert-danger">an unknown error occurred, the product was not deleted</div>');
        });
    }
    
    $('.delete-btn').each(function(index) {
        var pid = $( this ).attr('id').split("-")[1];
        $(this).on('click', function() {
            if (confirm("This will permanently delete the product. Are you sure?")) {
               delete_product("/deleteone/" + pid);
               return false;
           }
        });
    });
});
</script>
@stop