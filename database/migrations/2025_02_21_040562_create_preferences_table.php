<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
	  use Illuminate\Support\Facades\Schema;
	  
	  return new class extends Migration{

	public function up():void
	{
		Schema::create('preferences', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('profile_id')->unsigned();
			$table->integer('location_id')->unsigned()->nullable();
			$table->json('salary_range')->nullable();
			$table->integer('job_type_id')->unsigned()->nullable();
			$table->enum('office', array('On-Site', 'Remote'))->nullable();
			$table->timestamps();
		});
	}

	public function down():void
	{
		Schema::drop('preferences');
	}
};