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
        Schema::create('meal_history', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->date('date');
            $table->string('image_url');
            $table->string('summary');
            $table->integer('calories')->comment('kcal');
            $table->bigInteger('user_id')->unsigned()->index()->nullable();   
            $table->bigInteger('cat_id')->unsigned()->index()->nullable();          
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('cat_id')->references('id')->on('meal_category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meal_history');
    }
};
