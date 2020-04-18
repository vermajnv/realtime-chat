<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourtsTranslationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('court_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('court_id')->nullable();
            $table->string('locale')->index();
            $table->string('title');
            $table->text('description')->nullable();
            $table->foreign('court_id')->references('id')->on('courts')->onDelete('cascade');
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
        Schema::dropIfExists('courts_translation');
    }
}
