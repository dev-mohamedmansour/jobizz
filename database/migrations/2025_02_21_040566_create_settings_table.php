<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
	  use Illuminate\Support\Facades\Schema;
	  
	  return new class extends Migration {

	public function up():void
	{
		Schema::create('settings', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->text('about_app');
			$table->timestamps();
		});
	}

	public function down():void
	{
		Schema::drop('settings');
	}
};