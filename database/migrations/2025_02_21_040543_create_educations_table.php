<?php
	  
	  use Illuminate\Database\Migrations\Migration;
	  use Illuminate\Database\Schema\Blueprint;
	  use Illuminate\Support\Facades\Schema;
	  
	  return new class extends Migration
	  {
			 
			 public function up(): void
			 {
					Schema::create('educations', function (Blueprint $table) {
						  $table->increments('id');
						  $table->string('school_name' );
						  $table->string('degree');
						  $table->string('study_field' );
						  $table->date('start_date');
						  $table->date('end_date');
						  $table->integer('profile_id');
						  $table->timestamps();
					});
			 }
			 
			 public function down(): void
			 {
					Schema::drop('educations');
			 }
	  };