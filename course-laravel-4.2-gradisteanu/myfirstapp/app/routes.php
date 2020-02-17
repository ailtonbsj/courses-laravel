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
	// Insert Item
	// $book = new Book;
	// $book->writer = 'Mark Twain';
	// $book->title = 'The Adventures of Tom Sawyer';
	// $book->description = 'A novel about a young boy growing up along the Mississipi River';
	// $book->published = date('Y-m-d');
	// $book->save();

	// Select item
	$book = Book::find(1);

	// Update Item
	// $book->in_store = 1;
	// $book->save();

	// Delete Item
	$book->delete();


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
