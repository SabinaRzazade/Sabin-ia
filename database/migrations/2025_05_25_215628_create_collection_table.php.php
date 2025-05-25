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
        Schema::create('collections', function (Blueprint $table) {
        $table->id();
        $table->string('spring_bloom');
        $table->string('autumn_elegance');
        $table->string('evening_icons');
        $table->string('minimal_chic');
        $table->string('statement_outerwear');
        $table->string('timeless_accessories');

        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
