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
        Schema::create('studentapproval', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Record_ID'); 
            $table->foreign('Record_ID')->references('id')->on('studentrecords')->onDelete('cascade'); 
            $table->date('Approval_Date');
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
        Schema::dropIfExists('studentapproval');
    }
};
