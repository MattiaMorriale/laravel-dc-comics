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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();

            $table->string('title', 200);
            $table->text('description')->nullable();
            $table->string('thumb')->nullable();
            $table->smallInteger('price');
            $table->string('series', 50);
            $table->date('sale_date');
            $table->string('type', 50);
            $table->string('artists', 80);
            $table->string('writers', 80);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
