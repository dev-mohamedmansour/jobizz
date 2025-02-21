<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
	  use Illuminate\Support\Facades\Schema;
	  
	  return new class extends Migration {

	public function up():void
	{
		Schema::table('portfolios', function(Blueprint $table) {
			$table->foreign('image_id')->references('id')->on('images')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('locations', function(Blueprint $table) {
			$table->foreign('country_id')->references('id')->on('countries')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('categories', function(Blueprint $table) {
			$table->foreign('image_id')->references('id')->on('images')
						->onDelete('no action')
						->onUpdate('cascade');
		});
		Schema::table('jobs', function(Blueprint $table) {
			$table->foreign('company_id')->references('id')->on('companies')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('jobs', function(Blueprint $table) {
			$table->foreign('location_id')->references('id')->on('locations')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('jobs', function(Blueprint $table) {
			$table->foreign('category_id')->references('id')->on('categories')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('jobs', function(Blueprint $table) {
			$table->foreign('jop_type_id')->references('id')->on('job_typies')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('profiles', function(Blueprint $table) {
			$table->foreign('image_id')->references('id')->on('images')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('category_profile', function(Blueprint $table) {
			$table->foreign('profile_id')->references('id')->on('profiles')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('category_profile', function(Blueprint $table) {
			$table->foreign('category_id')->references('id')->on('categories')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('companies', function(Blueprint $table) {
			$table->foreign('location_id')->references('id')->on('locations')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('companies', function(Blueprint $table) {
			$table->foreign('admin_id')->references('id')->on('admins')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('reviews', function(Blueprint $table) {
			$table->foreign('profile_id')->references('id')->on('profiles')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('reviews', function(Blueprint $table) {
			$table->foreign('company_id')->references('id')->on('companies')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('messages', function(Blueprint $table) {
			$table->foreign('sender_id')->references('id')->on('profiles')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('messages', function(Blueprint $table) {
			$table->foreign('receiver_id')->references('id')->on('profiles')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('notifications', function(Blueprint $table) {
			$table->foreign('job_id')->references('id')->on('jobs')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('preferences', function(Blueprint $table) {
			$table->foreign('profile_id')->references('id')->on('profiles')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('preferences', function(Blueprint $table) {
			$table->foreign('location_id')->references('id')->on('locations')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('preferences', function(Blueprint $table) {
			$table->foreign('job_type_id')->references('id')->on('job_typies')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('job_title_preference', function(Blueprint $table) {
			$table->foreign('preference_id')->references('id')->on('preferences')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('job_title_preference', function(Blueprint $table) {
			$table->foreign('job_title_id')->references('id')->on('job_titles')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('job_profile', function(Blueprint $table) {
			$table->foreign('profile_id')->references('id')->on('profiles')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('job_profile', function(Blueprint $table) {
			$table->foreign('job_id')->references('id')->on('jobs')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('settings', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('notification_profile', function(Blueprint $table) {
			$table->foreign('notification_id')->references('id')->on('notifications')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('notification_profile', function(Blueprint $table) {
			$table->foreign('profile_id')->references('id')->on('profiles')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down():void
	{
		Schema::table('portfolios', function(Blueprint $table) {
			$table->dropForeign('portfolios_image_id_foreign');
		});
		Schema::table('locations', function(Blueprint $table) {
			$table->dropForeign('locations_country_id_foreign');
		});
		Schema::table('categories', function(Blueprint $table) {
			$table->dropForeign('categories_image_id_foreign');
		});
		Schema::table('jobs', function(Blueprint $table) {
			$table->dropForeign('jobs_company_id_foreign');
		});
		Schema::table('jobs', function(Blueprint $table) {
			$table->dropForeign('jobs_location_id_foreign');
		});
		Schema::table('jobs', function(Blueprint $table) {
			$table->dropForeign('jobs_category_id_foreign');
		});
		Schema::table('jobs', function(Blueprint $table) {
			$table->dropForeign('jobs_jop_type_id_foreign');
		});
		Schema::table('profiles', function(Blueprint $table) {
			$table->dropForeign('profiles_image_id_foreign');
		});
		Schema::table('category_profile', function(Blueprint $table) {
			$table->dropForeign('category_profile_profile_id_foreign');
		});
		Schema::table('category_profile', function(Blueprint $table) {
			$table->dropForeign('category_profile_category_id_foreign');
		});
		Schema::table('companies', function(Blueprint $table) {
			$table->dropForeign('companies_location_id_foreign');
		});
		Schema::table('companies', function(Blueprint $table) {
			$table->dropForeign('companies_admin_id_foreign');
		});
		Schema::table('reviews', function(Blueprint $table) {
			$table->dropForeign('reviews_profile_id_foreign');
		});
		Schema::table('reviews', function(Blueprint $table) {
			$table->dropForeign('reviews_company_id_foreign');
		});
		Schema::table('messages', function(Blueprint $table) {
			$table->dropForeign('messages_sender_id_foreign');
		});
		Schema::table('messages', function(Blueprint $table) {
			$table->dropForeign('messages_receiver_id_foreign');
		});
		Schema::table('notifications', function(Blueprint $table) {
			$table->dropForeign('notifications_job_id_foreign');
		});
		Schema::table('preferences', function(Blueprint $table) {
			$table->dropForeign('preferences_profile_id_foreign');
		});
		Schema::table('preferences', function(Blueprint $table) {
			$table->dropForeign('preferences_location_id_foreign');
		});
		Schema::table('preferences', function(Blueprint $table) {
			$table->dropForeign('preferences_job_type_id_foreign');
		});
		Schema::table('job_title_preference', function(Blueprint $table) {
			$table->dropForeign('job_title_preference_preference_id_foreign');
		});
		Schema::table('job_title_preference', function(Blueprint $table) {
			$table->dropForeign('job_title_preference_job_title_id_foreign');
		});
		Schema::table('job_profile', function(Blueprint $table) {
			$table->dropForeign('job_profile_profile_id_foreign');
		});
		Schema::table('job_profile', function(Blueprint $table) {
			$table->dropForeign('job_profile_job_id_foreign');
		});
		Schema::table('settings', function(Blueprint $table) {
			$table->dropForeign('settings_user_id_foreign');
		});
		Schema::table('notification_profile', function(Blueprint $table) {
			$table->dropForeign('notification_profile_notification_id_foreign');
		});
		Schema::table('notification_profile', function(Blueprint $table) {
			$table->dropForeign('notification_profile_profile_id_foreign');
		});
	}
};