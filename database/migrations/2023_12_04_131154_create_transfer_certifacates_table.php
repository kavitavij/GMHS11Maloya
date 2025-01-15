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
        Schema::create('transfer_certifacates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transfer_certifacate_categorys_id');

            $table->foreign('transfer_certifacate_categorys_id')->references('id')->on('transfer_certifacate_categorys')->onDelete('cascade');

            $table->integer('admission_number');
            $table->string('student_name');
            $table->integer('class_last_studied_upto');
            $table->date('certificate_issue_date');
            $table->string('file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transfer_certifacates');
    }
};
