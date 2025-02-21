<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
	  use Illuminate\Support\Facades\Schema;
	  
	  return new class extends Migration {

	public function up():void
	{
		Schema::create('profiles', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('image_id')->unsigned();
			$table->string('job_title');
			$table->timestamps();
		});
	}

	public function down():void
	{
		Schema::drop('profiles');
	}
};