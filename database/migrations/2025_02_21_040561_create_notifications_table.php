<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
	  use Illuminate\Support\Facades\Schema;
	  
	  return new class extends Migration {

	public function up():void
	{
		Schema::create('notifications', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('job_id')->unsigned();
			$table->string('message');
			$table->string('title');
			$table->timestamps();
		});
	}

	public function down():void
	{
		Schema::drop('notifications');
	}
};