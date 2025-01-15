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
        Schema::create('school_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('affiliation_number')->nullable();
            $table->bigInteger('affiliation_validity')->nullable();
            $table->bigInteger('school_code')->nullable();
            $table->string('school_name')->nullable();
            $table->string('address')->nullable();
            $table->string('principal_name')->nullable();
            $table->bigInteger('principal_contact_number')->nullable();
            $table->date('principal_retirement_date')->nullable();
            $table->bigInteger('school_contact_number')->nullable();
            $table->string('school_email')->nullable();
            $table->string('school_website')->nullable();
            $table->string('landmark')->nullable();
            $table->bigInteger('estsblishment_year')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_details');
    }
};
