<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
	  use Illuminate\Support\Facades\Schema;
	  
	  return new class extends Migration
{

	public function up(): void
	{
		Schema::create('category_profile', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('profile_id')->unsigned();
			$table->integer('category_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down():void
	{
		Schema::drop('category_profile');
	}
};