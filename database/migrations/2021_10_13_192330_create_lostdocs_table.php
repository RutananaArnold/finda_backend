<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLostdocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lostdocs', function (Blueprint $table) {
            $table->id();
            $table->string('selecteditem');
            $table->string('docfirstname');
            $table->string('doclastname');
            $table->string('dateofbirth');
            $table->string('gender');
            $table->string('nationality');
            $table->string('location');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('phone');
            $table->string('pic');
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
        Schema::dropIfExists('lostdocs');
    }
}
