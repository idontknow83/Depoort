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
        Schema::create('consult', function (Blueprint $table) {
            $table->id()->primary()->length(10);
            $table->string('title')->length(999)->nullable();
            $table->integer('artsId')->length(10);
            $table->integer('clientId')->length(10);
            $table->string('tekst')->length(999);
            $table->string('date')->length(20);
            $table->string('start_time')->length(100);
            $table->string('end_time')->length(10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consult');
    }
};
