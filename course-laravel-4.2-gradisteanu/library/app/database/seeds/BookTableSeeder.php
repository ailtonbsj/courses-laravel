<?php

class BookTableSeeder extends Seeder {
	
	public function run(){
		Book::truncate();
		Book::create([
			'title' => 'Journey',
			'writer' => 'Jules',
			'user_id' => 1
		]);
		Book::create([
			'title' => 'Adventures',
			'writer' => 'Mark',
			'user_id' => 2
		]);
		Book::create([
			'title' => 'Harry Potter',
			'writer' => 'Rowling',
			'user_id' => 3
		]);
	}

}