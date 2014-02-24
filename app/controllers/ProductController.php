<?php

class ProductController extends BaseController {

    /**
     * Displays the product listing
     * @return Illuminate\View\View
     */
    public function showList()
    {
        return View::make('list')->with('products', Product::all());
    }
    
    /**
     * Displays the form for adding a new product
     * @return Illuminate\View\View
     */
    public function showAddOne()
    {
        return View::make('addone')
                ->with('category_options', Category::getAllAsOptions());
    }

    /**
     * Processes the form for adding a new product
     * @return Illuminate\Http\RedirectResponse
     */
    public function createOne()
    {
        $values = Input::only('name', 'price', 'description', 'category_id');        
        $validator = Validator::make($values, Product::$rules);
        if ($validator->fails())
        {
            return Redirect::action('ProductController@showAddOne')->withInput()->withErrors($validator);
        }

        Product::create($values);
        return Redirect::action('ProductController@showList');
    }
    
    /**
     * Displays the form for editing an existing product
     * @param Product $product
     * @return Illuminate\View\View
     */
    public function editOne(Product $product)
    {
        return View::make('editone')->with('product', $product)
            ->with('category_options', Category::getAllAsOptions());
    }
    
    /**
     * Processes the form for an existing product
     * @param Product $product
     * @return Illuminate\Http\RedirectResponse
     */
    public function updateOne(Product $product)
    {
        // This should be refactored since it repeats what is done in createOne
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
    
    /**
     * Handles the call to delete a product
     * @param Product $product
     * @return Illuminate\Http\RedirectResponse
     */
    public function deleteOne(Product $product)
    {
        $product->delete();
        return Redirect::action('ProductController@showList');
    }
}