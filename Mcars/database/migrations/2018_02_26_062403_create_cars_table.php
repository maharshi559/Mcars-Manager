<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('brand');
            $table->string('carname');
            $table->string('carnumber');
            $table->string('model'); 
           $table->year('year');
            $table->string('color');  
            $table->string('fueltype');
            $table->integer('seatcap');
            $table->string('enginenumber');
            $table->string('chasisnumber');
            $table->date('insstart');
            $table->date('inssend');
            $table->date('pollutionexp');
            $table->string('vendorname');
            $table->string('carimage');           
            $table->integer('custprice');
            $table->integer('vendprice');
            $table->string('pollutioncopy')->nullable();
            $table->string('insurancecopy')->nullable();
            $table->string('rccopy')->nullable();
            $table->string('frontpic')->nullable();
            $table->string('dsidepic')->nullable();
            $table->string('psidepic')->nullable();
            $table->string('backpic')->nullable();
            $table->string('carstatus')->default('Available');

            $table->timestamps();
        });
        DB::statement("ALTER TABLE cars AUTO_INCREMENT = 3118191;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
