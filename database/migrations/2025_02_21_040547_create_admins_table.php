<?php
	  
	  use Illuminate\Database\Migrations\Migration;
	  use Illuminate\Database\Schema\Blueprint;
	  use Illuminate\Support\Facades\Schema;
	  
	  return new class extends Migration {
			 
			 public function up(): void
			 {
					Schema::create('admins', function (Blueprint $table) {
						  $table->increments('id');
						  $table->string('email')->unique();
						  $table->string('password');
						  $table->enum(
								'role', array('Admin', 'Super-admin', 'Company')
						  );
						  $table->rememberToken();
						  $table->timestamps();
					});
			 }
			 
			 public function down(): void
			 {
					Schema::drop('admins');
			 }
	  };