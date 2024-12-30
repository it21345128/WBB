<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutVisionMissionTable extends Migration
{
    public function up()
    {
        Schema::create('about_vision_mission', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['vision', 'mission']);
            $table->text('content');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('about_vision_mission');
    }
}
