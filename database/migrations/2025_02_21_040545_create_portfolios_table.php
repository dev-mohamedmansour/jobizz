<?php
	  
	  use Illuminate\Database\Migrations\Migration;
	  use Illuminate\Database\Schema\Blueprint;
	  use Illuminate\Support\Facades\Schema;
	  
	  return new class extends Migration {
			 
			 public function up(): void
			 {
					Schema::create('portfolios', function (Blueprint $table) {
						  $table->increments('id');
						  $table->integer('profile_id');
						  $table->enum('type', array('link', 'pdf', 'image'));
						  $table->text('content')->nullable();
						  $table->integer('image_id')->unsigned();
						  $table->timestamps();
					});
			 }
			 
			 public function down(): void
			 {
					Schema::drop('portfolios');
			 }
	  };