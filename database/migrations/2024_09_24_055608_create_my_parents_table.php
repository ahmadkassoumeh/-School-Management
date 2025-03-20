<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_parents', function (Blueprint $table) {
                 
            $table->id();
            $table->string('Email')->unique();
            $table->string('Password');

            //Fatherinformation
            $table->json('Name_Father');
            $table->string('National_ID_Father');
            $table->string('Passport_ID_Father');
            $table->string('Phone_Father');
            $table->json('Job_Father');
            $table->bigInteger('Nationality_Father_id')->unsigned();    //^^^
            $table->foreign('Nationality_Father_id')->references('id')->on('nationalities')->onDelete('cascade');
            $table->bigInteger('Blood_Type_Father_id')->unsigned();     //^^^
            $table->foreign('Blood_Type_Father_id')->references('id')->on('type__bloods')->onDelete('cascade');
            $table->bigInteger('Religion_Father_id')->unsigned();       //^^^
            $table->foreign('Religion_Father_id')->references('id')->on('religions')->onDelete('cascade');
            $table->string('Address_Father');

            //Mother information
            $table->json('Name_Mother');
            $table->string('National_ID_Mother');
            $table->string('Passport_ID_Mother');
            $table->string('Phone_Mother');
            $table->json('Job_Mother');
            $table->bigInteger('Nationality_Mother_id')->unsigned();  //?
            $table->foreign('Nationality_Mother_id')->references('id')->on('nationalities')->onDelete('cascade');
            $table->bigInteger('Blood_Type_Mother_id')->unsigned();   //?
            $table->foreign('Blood_Type_Mother_id')->references('id')->on('type__bloods')->onDelete('cascade');
            $table->bigInteger('Religion_Mother_id')->unsigned();     //?
            $table->foreign('Religion_Mother_id')->references('id')->on('religions')->onDelete('cascade');
            $table->string('Address_Mother');
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
        Schema::dropIfExists('my_parents');
    }
}
