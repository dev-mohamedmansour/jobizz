<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
	  use Illuminate\Support\Facades\Schema;
	  
	  return new class extends Migration{

	public function up():void
	{
		Schema::create('locations', function(Blueprint $table) {
			$table->increments('id');
			$table->string('city');
			$table->integer('country_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down():void
	{
		Schema::drop('locations');
	}
};