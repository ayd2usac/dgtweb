<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableComplaints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->uuid('uuid');
            $table->string('name')->nullable();
            $table->string('identification')->nullable();            
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();            
            $table->string('details');


            $table->integer('complaint_type_id')->unsigned(); 
            $table->integer('location_id')->unsigned(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('complaints');
    }
}
