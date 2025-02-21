<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
	  use Illuminate\Support\Facades\Schema;
	  
	  return new class extends Migration
{

	public function up():void
	{
		Schema::create('companies', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('location_id')->unsigned();
			$table->integer('admin_id')->unsigned();
			$table->text('web_link')->nullable();
			$table->text('linkedin_link')->nullable();
			$table->string('image_path')->nullable();
			$table->text('about_company');
			$table->timestamps();
		});
	}

	public function down(): void
	{
		Schema::drop('companies');
	}
};