<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requirments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Student_ID'); 
            $table->foreign('Student_ID')->references('id')->on('students')->onDelete('cascade'); 
            $table->string('PSABirthCertificate')->default('no');
            $table->string('ValidID')->default('no');
            $table->string('HealthCard')->default('no');
            $table->string('Assessment')->default('no');
            $table->string('SignedDocuments')->default('no');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requirments');
    }
};
