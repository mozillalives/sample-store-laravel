<?php

class Category extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';
    
    /**
     * Returns a hash of id => name for use in building
     * select options in forms
     * @return array
     */
    static public function getAllAsOptions()
    {
        $options = array();
        foreach (self::all() as $c) 
        {
            $options[$c->id] = $c->name;
        }
        return $options;
    }
}