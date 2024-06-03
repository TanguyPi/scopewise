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
        Schema::create('main_forms', function (Blueprint $table) {
            $table->id();
            $table->string('team');
            $table->string('experience');
            $table->mediumText('description');
            $table->mediumtext('features');
            $table->string('design');
            $table->string('stack');
            $table->string('qa');
            $table->string('docker');
            $table->string('hosting');
            $table->string('devops');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_forms');
    }
};
