<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutFunctionsTable extends Migration
{
    public function up()
    {
        Schema::create('about_functions', function (Blueprint $table) {
            $table->id();
            $table->text('function');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('about_functions');
    }
}
