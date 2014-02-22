<?php

class Product extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'products';

    protected $guarded = array('id');

    static public $rules = array(
        'name' => 'required|min:1|max:100',
        'price' => 'required|numeric',
        'description' => 'required|min:1',
        'category_id' => 'required|integer',
    );
    
}