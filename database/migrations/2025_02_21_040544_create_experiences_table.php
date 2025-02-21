<?php
	  
	  use Illuminate\Database\Migrations\Migration;
	  use Illuminate\Database\Schema\Blueprint;
	  use Illuminate\Support\Facades\Schema;
	  
	  return new class extends Migration {
			 
			 public function up(): void
			 {
					Schema::create('experiences', function (Blueprint $table) {
						  $table->increments('id');
						  $table->integer('profile_id');
						  $table->string('company_name');
						  $table->string('job_title');
						  $table->date('start_date');
						  $table->date('end_date')->nullable();
						  $table->timestamps();
					});
			 }
			 
			 public function down(): void
			 {
					Schema::drop('experiences');
			 }
	  };