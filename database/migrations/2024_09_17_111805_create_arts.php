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
        Schema::create('arts', function (Blueprint $table) {
            $table->id()->primary()->length(10);
            $table->string('voornaam')->length(50);
            $table->string('tussenvoegsel')->length(10)->nullable();
            $table->string('achternaam')->length(50);
            $table->string('adres')->length(100);
            $table->string('postcode')->length(10);
            $table->string('woonplaats')->length(50);
            $table->string('land')->length(50);
            $table->string('telefoon')->length(20);
            $table->string('mobiel')->lenght(20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arts');
    }
};
