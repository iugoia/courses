<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->integer('oldprice')->nullable();
            $table->integer('price')->nullable();
            $table->integer('price_credit')->nullable();
            $table->string('school');
            $table->integer('places')->nullable();
            $table->text('tiny_desc')->nullable();
            $table->string('start_date')->nullable();
            $table->text('about')->nullable();
            $table->text('skills')->nullable();
            $table->string('link')->nullable();
            $table->text("comments")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
