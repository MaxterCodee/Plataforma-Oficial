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
        Schema::table('weeks', function (Blueprint $table) {
            //
                 // Eliminar las columnas week_name y description
                 $table->dropColumn('week_name');
                 $table->dropColumn('description');
     
                 // Agregar las columnas start_date y end_date
                 $table->date('start_date')->nullable();
                 $table->date('end_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('weeks', function (Blueprint $table) {
            //
            $table->string('week_name');
            $table->text('description');
            
            $table->dropColumn('start_date');
            $table->dropColumn('end_date');
        });
    }
};
