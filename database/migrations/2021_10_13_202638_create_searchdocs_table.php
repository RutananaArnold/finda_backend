<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSearchdocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('searchdocs', function (Blueprint $table) {
            $table->id();
            $table->string('selecteditem');
            $table->string('lostdocfirstname');
            $table->string('lostdoclastname');
            $table->string('lostdocdateofbirth');
            $table->string('searchinggender');
            $table->string('searchingnationality');
            $table->string('searchingfirstname');
            $table->string('searchinglastname');
            $table->string('searchingemail');
            $table->string('phone');
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
        Schema::dropIfExists('searchdocs');
    }
}
