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
            $table->integer('BirthOrder');
            $table->integer('NoOfSiblings');
            $table->integer('DateOfBirth');
            $table->string('BirthPlace');
            $table->integer('BirthRegistered');
            $table->string('Region');
            $table->string('Province');
            $table->string('City');
            $table->string('Barangay');
            $table->string('NoOfStreetAd');
            $table->string('Religion');
            $table->string('Ethnicity');
            $table->string(column: 'dropped');
            $table->boolean('is_admin')->default(0);
            $table->string('password');
            $table->rememberToken();
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
