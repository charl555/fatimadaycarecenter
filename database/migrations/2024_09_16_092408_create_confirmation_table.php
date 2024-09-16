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
        Schema::create('confirmation', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Students_ID'); 
            $table->foreign('Students_ID')->references('id')->on('students')->onDelete('cascade'); 
            $table->unsignedBigInteger('Parent_ID'); 
            $table->foreign('Parent_ID')->references('id')->on('parents')->onDelete('cascade'); 
            $table->date('Confirmation_Date');
            $table->string('Status');
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
        Schema::dropIfExists('confirmation');
    }
};
