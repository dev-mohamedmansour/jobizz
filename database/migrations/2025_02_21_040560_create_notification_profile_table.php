<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
	  use Illuminate\Support\Facades\Schema;
	  
	  return new class extends Migration {

	public function up():void
	{
		Schema::create('notification_profile', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('notification_id')->unsigned();
			$table->integer('profile_id')->unsigned();
		});
	}

	public function down():void
	{
		Schema::drop('notification_profile');
	}
};