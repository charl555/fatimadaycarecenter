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
        Schema::create('studentrecords', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Students_ID'); 
            $table->foreign('Students_ID')->references('id')->on('students')->onDelete('cascade'); 
            $table->date('Enrollment_Date');
            $table->date('Report_Generated');
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
        Schema::dropIfExists('studentrecords');
    }
};
