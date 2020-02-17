<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooks extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('books2', function($newTable){
			$newTable->increments('id');
			$newTable->string('writer');
			$newTable->string('title', 500);
			$newTable->text('description');
			$newTable->date('published');
			$newTable->integer('copied');
			$newTable->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('books2');
	}

}
