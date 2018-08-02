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
	// Create a table
	// Schema::create('books', function($table){
	// 	$table->increments('id');
	// 	$table->string('writer');
	// 	$table->string('title', 500);
	// 	$table->text('description');
	// 	$table->date('published');
	// 	$table->integer('copies');
	// 	$table->timestamps();
	// });

	//Update a table
	// Schema::table('books', function($table){
	// 	$table->boolean('in_store');
	// 	$table->dropColumn('copies');
	// });

	//Insert Item
	// $book = new Book;
	// $book->writer = 'Mark Twain';
	// $book->title = 'The adventures';
	// $book->description = 'A novel about a young boy';
	// $book->published = date('Y-m-d');
	// $book->save();
	// echo $book->id;

	//List and Update Item
	// $book = Book::find(1);
	// $book->in_store = 1;
	// $book->save();

	//Delete Item
	#$book = Book::find(1);
	#$book->delete();

	$cities = array('Los Angeles', 'San Francisco', 'NYC', 'Miami');
	return View::make('hello', 
		array('location' => 'california',
		'cities' => $cities));
});

Route::get('category', function(){
	return View::make('hello');
});

Route::get('category/sf', function(){
	return 'Science Fiction!';
});

Route::get('category/{param}', function($param){
	return $param . ' content';
});
