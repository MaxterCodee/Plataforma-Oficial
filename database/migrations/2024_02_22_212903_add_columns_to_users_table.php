<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('last_name_1')->after('name')->nullable();
            $table->string('last_name_2')->after('last_name_1')->nullable();
            $table->unsignedBigInteger('gender_id')->nullable();
            $table->unsignedTinyInteger('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('last_name_1');
            $table->dropColumn('last_name_2');
            $table->dropColumn('gender_id');
            $table->dropColumn('status');
        });
    }
}
