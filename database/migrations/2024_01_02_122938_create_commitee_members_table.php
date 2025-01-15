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
        Schema::create('commitee_members', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('committees_id');

            $table->foreign('committees_id')->references('id')->on('school_committees')->onDelete('cascade');

            $table->string('mamber_name');
            $table->string('designation');
            $table->string('phone_number');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commitee_members');
    }
};
