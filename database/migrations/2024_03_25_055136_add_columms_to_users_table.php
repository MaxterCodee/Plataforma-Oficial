<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('last_name_1')->after('name')->nullable();
            $table->string('last_name_2')->after('last_name_1')->nullable();
            $table->unsignedBigInteger('gender_id')->nullable();
            $table->unsignedTinyInteger('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('last_name_1');
            $table->dropColumn('last_name_2');
            $table->dropColumn('gender_id');
            $table->dropColumn('status');
        });
    }
};
