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
        Schema::create('contants', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('heading');
            $table->string('description');
            $table->integer('type')->comment('1 = Principal desk , 2 = Infrastucture , 3 = School at a Glance');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contants');
    }
};
