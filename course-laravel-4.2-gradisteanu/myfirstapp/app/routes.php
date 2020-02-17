<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	// Create the table books
	Schema::create('books', function($newTable){
		$newTable->increments('id');
		$newTable->string('writer');
		$newTable->string('title', 500);
		$newTable->text('description');
		$newTable->date('published');
		$newTable->integer('copied');
		$newTable->timestamps();
	});

	// Update the table books
	Schema::table('books', function($newTable){
		$newTable->boolean('in_store');
		$newTable->dropColumn('copied');
	});


	return View::make('hello');
});

Route::get('category', function()
{
	return 'Category page content';
});

Route::get('category/sf', function()
{
	return 'Science Fiction page content';
});

Route::get('category/{parameter}', function($parameter){
	return $parameter . ' page content';
});
