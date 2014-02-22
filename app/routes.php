<?php


Route::model('product', 'Product');

Route::get('/', function() {
    return Redirect::to('/list');
});

Route::get('/list', 'ProductController@showList');
Route::get('/addone', 'ProductController@showAddOne');
Route::post('/addone/save', 'ProductController@createOne');
Route::get('/editone/{product}', 'ProductController@editOne');
Route::post('/editone/{product}/save', 'ProductController@updateOne');
Route::post('/deleteone/{product}', 'ProductController@deleteOne');

