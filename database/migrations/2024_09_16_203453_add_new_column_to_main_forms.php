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
        Schema::table('main_forms', function (Blueprint $table) {
            $table->string('name')->after('id');
            $table->string('free_stack')->nullable()->after('stack');
            $table->string('unitaire')->after('stack');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('main_forms', function (Blueprint $table) {
            //
        });
    }
};
