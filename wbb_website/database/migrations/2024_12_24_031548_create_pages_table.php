<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('title'); // Page Title
            $table->string('slug')->unique(); // URL Slug
            $table->text('content')->nullable(); // Page Content
            $table->boolean('status')->default(1); // 1 for active, 0 for inactive
            $table->timestamps(); // Created At and Updated At
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
