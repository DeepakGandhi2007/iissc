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
        Schema::create('faculities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('post');
            $table->text('theydo');
            $table->text('where');
            $table->text('image');
            $table->text('redirect');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faculities');
    }
};