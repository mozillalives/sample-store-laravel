@extends('layout')

@section('content')
<table>
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th colspan="2">Actions</th>
    </tr>
    @foreach($products as $p)
    <tr>
        <td title="{{ $p->description }}">{{ $p->name }}</td>
        <td>${{ number_format($p->price, 2) }}</td>
        <td><a href="{{ URL::action('ProductController@editOne', array($p->id)) }}">Edit</a></td>
        <td><a class="delete-btn" id="product-{{ $p->id }}" href="#">Delete</a></td>
    </tr>
    @endforeach
    <tr>
        <td></td>
        <td></td>
        <td><a href="{{ URL::action('ProductController@showAddOne') }}">Add One</a></td>
    </tr>
    
</table>
@stop

@section('extrajs')

<script type="text/javascript" charset="utf-8">

function delete_product(url) 
{
    $.post(url, function() {
        alert( "product deleted" );
    })
    .fail(function() {
        alert( "an unknown error occurred, the product was not deleted" );
    });
}

$(document).ready(function() {
    
    $('.delete-btn').each(function(index) {
        // TODO add confirm in here
        var pid = $( this ).attr('id').split("-")[1];
        $(this).on('click', function() {
           delete_product("/deleteone/" + pid);
           return false;
        });
    });
});
</script>
@stop