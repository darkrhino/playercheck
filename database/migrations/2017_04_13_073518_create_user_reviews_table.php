<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reviewer_id');
            $table->integer('reviewee_id');
            $table->integer('stars');
            $table->longText('comments')->nullable();
            $table->longText('response')->nullable();
            $table->integer('request_id')->nullable();
            $table->integer('transaction_source_id')->nullable();
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
        Schema::dropIfExists('reviews');
    }
}
