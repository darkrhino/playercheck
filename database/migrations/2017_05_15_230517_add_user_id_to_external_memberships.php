<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToExternalMemberships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('site_membership_external_defences', function (Blueprint $table) {
            $table->integer('user_id');
            $table->timestamp('vaild_from')->nullable();
            $table->integer('membership_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('site_membership_external_defences', function (Blueprint $table) {
            $table->dropColumn('user_id');
            $table->dropColumn('vaild_from');
            $table->integer('membership_id')->change();
        });
    }
}
