<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->id();
            $table->text('firstName');
            $table->text('lastName');
            $table->string('email')->unique();
            $table->string('blood_group');
            $table->date('birthDate');
            $table->string('phoneNumber')->unique();
            $table->integer('weight');
            $table->string('gender');
            $table->string('city',52);
            $table->longText('address');
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
        Schema::dropIfExists('donors');
    }
}
