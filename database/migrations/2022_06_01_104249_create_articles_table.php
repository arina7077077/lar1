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
    public function up():void
    {

        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('название новости');
            $table->text('content')->nullable()->comment('содержимое новости');
            $table->integer('category_id')->unsigned()->comment('id категории');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->integer('resource_id')->unsigned()->comment('id источника');
            $table->foreign('resource_id')->references('id')->on('resources');
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
        Schema::dropIfExists('articles');
    }
};
