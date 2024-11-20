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
        Schema::create('basketballs', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('team');
        $table->integer('jersey_number');
        $table->string('position');
        $table->float('height');
        $table->float('weight');
        $table->integer('age');
        $table->integer('draft_year');
        $table->integer('draft_pick');
        $table->date('birthdate');
        $table->string('country');
        $table->integer('experience');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('basketballs');
    }
};
