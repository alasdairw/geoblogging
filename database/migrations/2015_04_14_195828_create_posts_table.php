<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned()->index();
			$table->foreign('user_id')->references('id')->on('users');
			$table->integer('post_type_id')->unsigned()->index();
			$table->foreign('post_type_id')->references('id')->on('post_types');
			$table->string('title');
			$table->text('body');
			$table->double('lat',16,9);
			$table->double('long',16,9);
			$table->string('status')->default('Draft')->index();
			$table->timestamp('published_at')->nullable()->index();
			$table->softDeletes();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}
