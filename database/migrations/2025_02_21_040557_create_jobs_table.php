<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
	  use Illuminate\Support\Facades\Schema;
	  
	  return new class extends Migration {

	public function up():void
	{
		Schema::create('jobs', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->integer('company_id')->unsigned();
			$table->integer('location_id')->unsigned();
			$table->integer('category_id')->unsigned();
			$table->integer('jop_type_id')->unsigned();
			$table->float('salary');
			$table->text('description');
			$table->text('requirement')->nullable();
			$table->enum('experience_level', array('Internship', 'Entry-Level', 'Junior', 'Mid-Level', 'Senior', 'Leader', 'Engineering-manager'));
			$table->enum('status', array('Open', 'Closed', 'Applied'));
			$table->timestamps();
		});
	}

	public function down():void
	{
		Schema::drop('jobs');
	}
};