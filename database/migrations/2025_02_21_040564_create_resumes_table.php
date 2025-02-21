<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
	  use Illuminate\Support\Facades\Schema;
	  
	  return new class extends Migration{

	public function up():void
	{
		Schema::create('resumes', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('profile_id');
			$table->text('file_path');
			$table->timestamps();
		});
	}

	public function down():void
	{
		Schema::drop('resumes');
	}
};