<?php

class ProductTableSeeder extends Seeder {
    
    public function run()
    {
        DB::table('products')->delete();
        
        $office_cat = Category::where('name', '=', 'Office Supplies')->first()->id;
        $toys_cat = Category::where('name', '=', 'Toys')->first()->id;
        
        Product::create(array('name' => 'Red Swingline Stapler', 'price' => 5.50,
            'description' => "That's my stapler.", 'category_id' => $office_cat));
            
        Product::create(array('name' => 'Chair', 'price' => 65.00,
            'description' => "A standard office chair", 'category_id' => $office_cat));
            
        Product::create(array('name' => 'Nerf Gun', 'price' => 12.50,
            'description' => "A six shot nerf revolver", 'category_id' => $toys_cat));
            
        Product::create(array('name' => '12 Nerf Darts', 'price' => 9.00,
            'description' => "Darts for the Nerf Gun", 'category_id' => $toys_cat));
            
        
    }
}