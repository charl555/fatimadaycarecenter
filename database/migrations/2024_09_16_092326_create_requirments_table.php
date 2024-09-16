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
            $table->unsignedBigInteger('Students_ID'); 
            $table->foreign('Students_ID')->references('id')->on('students')->onDelete('cascade'); 
            $table->string('PSA/BirthCirtificate');
            $table->string('ValidID');
            $table->string('HealthCard');
            $table->string('Assessment');
            $table->string('SignedDocuments');
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
