<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
	  use Illuminate\Support\Facades\Schema;
	  
	  return new class extends Migration {

	public function up():void
	{
		Schema::create('job_titles', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
		});
	}

	public function down():void
	{
		Schema::drop('job_titles');
	}
};