<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
	  use Illuminate\Support\Facades\Schema;
	  
	  return new class extends Migration {

	public function up():void
	{
		Schema::create('job_typies', function(Blueprint $table) {
			$table->increments('id');
			$table->enum('name', array('Freelance', 'Internship', 'Contract', 'Entry-Level', 'Junior', 'Mid-Level', 'Senior', 'Leader', 'Engineering-manager'));
			$table->timestamps();
		});
	}

	public function down():void
	{
		Schema::drop('job_typies');
	}
};