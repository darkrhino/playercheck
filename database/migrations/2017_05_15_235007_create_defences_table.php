<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('defences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('site_id');
            $table->integer('defence_id');
            $table->string('defence_membership_id')->nullable();
            $table->timestamp('vaild_at')->nullable();
            $table->timestamp('renewed_at')->nullable();
            $table->timestamp('expires_at')->nullable();
            $table->integer('created_by_id')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('defence_providers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->longText('details')->nullable();
            $table->string('website_url')->nullable();
            $table->string('logo_url')->nullable();
            $table->string('facebook_url')->nullable();
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
        Schema::dropIfExists('defences');
        Schema::dropIfExists('defence_providers');
    }
}
