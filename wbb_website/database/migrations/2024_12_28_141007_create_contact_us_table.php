<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactUsTable extends Migration
{
    public function up()
    {
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();
            $table->string('label_name')->nullable();
            $table->string('label_email')->nullable();
            $table->string('label_message')->nullable();
            $table->string('placeholder_name')->nullable();
            $table->string('placeholder_email')->nullable();
            $table->string('placeholder_message')->nullable();
            $table->string('submit_button_text')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contact_us');
    }
}
