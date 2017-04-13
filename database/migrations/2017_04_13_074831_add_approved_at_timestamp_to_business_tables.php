<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddApprovedAtTimestampToBusinessTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('businesses', function (Blueprint $table) {
            $table->dropColumn('approved');
            $table->timestamp('approved_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('businesses', function (Blueprint $table) {
            $table->dropColumn('approved_at');
            $table->boolean('approved')->default(false);
        });
    }
}
