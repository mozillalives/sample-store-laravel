<?php

class ProductController extends BaseController {

	public function showList()
	{
		return View::make('list')->with('products', Product::all());
	}
    
    public function showAddOne()
    {
        return View::make('addone')
                ->with('category_options', Category::getAllAsOptions());
    }

    public function createOne()
    {
        $values = Input::only('name', 'price', 'description', 'category_id');        
        $validator = Validator::make($values, Product::$rules);
        if ($validator->fails())
        {
            return Redirect::to('/addone')->withInput()->withErrors($validator);
        }

        Product::create($values);
        return Redirect::action('ProductController@showList');
    }
    
    public function editOne(Product $product)
    {
        return View::make('editone')->with('product', $product)
            ->with('category_options', Category::getAllAsOptions());
    }
    
    public function updateOne(Product $product)
    {
        $values = Input::only('name', 'price', 'description', 'category_id');
        $validator = Validator::make($values, Product::$rules);
        if ($validator->fails())
        {
            return Redirect::action('ProductController@editOne', $product->id)
                ->withInput()->withErrors($validator);
        }

        $product->fill($values);
        $product->save();
        return Redirect::action('ProductController@showList');
    }
    
    public function deleteOne(Product $product)
    {
        $product->delete();
        return Redirect::action('ProductController@showList');
    }
}