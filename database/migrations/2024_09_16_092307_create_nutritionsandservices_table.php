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
        Schema::create('nutritionsandservices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Student_ID'); 
            $table->foreign('Student_ID')->references('id')->on('students')->onDelete('cascade'); 
            $table->string('BreastFeeding');
            $table->string('SupplementalFeeding');
            $table->string('Disability');
            $table->string('DisabilityAssistance');
            $table->string('ListahanIdentified');
            $table->string('PantawidBeneficiary');
            $table->string('ECCDExperience');
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
        Schema::dropIfExists('nutritionsandservices');
    }
};
