<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        
        Schema::create('categories', function($table)
        {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        
        Schema::create('products', function($table)
        {
            $table->increments('id');
            $table->integer('category_id');
            $table->string('name');
            $table->decimal('price');
            $table->string('description');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('categories');
        Schema::drop('products');
	}

}
