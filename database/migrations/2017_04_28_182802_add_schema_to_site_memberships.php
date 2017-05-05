<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSchemaToSiteMemberships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_memberships', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('site_id');
            $table->integer('added_by_id')->nullable();
            $table->timestamp('expires_at')->nullable();
            $table->boolean('infinite_membership')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('site_membership_notes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('membership_id');
            $table->longText('notes');
            $table->integer('author_id')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('site_membership_external_defences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('defence_name')->nullable();
            $table->string('defence_number')->nullable();
            $table->timestamp('expires_at')->nullable();
            $table->integer('membership_id');
            $table->integer('author_id');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('user_site_attendance', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('site_id');
            $table->integer('user_id');
            $table->integer('logged_by_id')->nullable();
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
        Schema::dropIfExists('site_memberships');
        Schema::dropIfExists('site_membership_notes');
        Schema::dropIfExists('site_membership_external_defences');
        Schema::dropIfExists('user_site_attendance');
    }
}
