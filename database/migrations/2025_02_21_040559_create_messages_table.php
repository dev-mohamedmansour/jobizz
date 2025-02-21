<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
	  use Illuminate\Support\Facades\Schema;
	  
	  return new class extends Migration {

	public function up():void
	{
		Schema::create('messages', function(Blueprint $table) {
			$table->increments('id');
			$table->text('content')->nullable();
			$table->integer('sender_id')->unsigned();
			$table->integer('receiver_id')->unsigned();
			$table->timestamp('read_at')->nullable();
			$table->timestamps();
		});
	}

	public function down(): void
	{
		Schema::drop('messages');
	}
};