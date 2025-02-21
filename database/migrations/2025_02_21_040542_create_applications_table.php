<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
	  use Illuminate\Support\Facades\Schema;
	  
	  return new class extends Migration
	  {

	public function up():void
	{
		Schema::create('applications', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('profile_id');
			$table->integer('resume_id');
			$table->integer('job_id');
			$table->enum('status', array('Applied', 'Reviewed', 'Interview', 'Offer-Letter', 'Cancelled'));
			$table->string('cover_later')->nullable();
			$table->text('cover_path')->nullable();
			$table->timestamp('applied_date');
			$table->timestamps();
		});
	}

	public function down():void
	{
		Schema::drop('applications');
	}
};