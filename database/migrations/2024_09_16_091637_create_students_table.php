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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('First_Name');
            $table->string('Last_Name');
            $table->string('Middle_Initial');
            $table->string('Nickname');
            $table->string('Sex');
            $table->integer('BirthOrder')->nullable();
            $table->integer('NoOfSiblings')->nullable();
            $table->date('DateOfBirth'); // Changed to 'date' type
            $table->string('BirthPlace')->nullable();
            $table->string('BirthRegistered')->nullable();
            $table->string('Region')->nullable();
            $table->string('Province')->nullable();
            $table->string('City')->nullable();
            $table->string('Barangay')->nullable();
            $table->string('NoOfStreetAd')->nullable();
            $table->string('Religion')->nullable();
            $table->string('Ethnicity')->nullable();
            $table->string('Dropped')->default('no'); // Default value of 'no'
            $table->string('Approved')->default('no'); // Default value of 'no'
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
        Schema::dropIfExists('students');
    }
};
