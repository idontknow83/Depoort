<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('naam')->length(50);
            $table->string('telnummer')->length(50);
            $table->string('email')->length(50);
            $table->string('adres')->length(50);
            $table->string('land')->length(100);
            $table->string('postcode')->length(50);
            $table->string('woonplaats')->length(50);
            $table->string('gender')->length(50);
            $table->string('geboortedatum')->length(50);
            $table->string('password')->length(200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
