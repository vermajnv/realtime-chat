<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaseTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('case_id')->nullable();
            $table->string('locale')->index();
            $table->string('title');
            $table->text('description')->nullable();
            $table->foreign('case_id')->references('id')->on('cases')->onDelete('cascade');
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
        Schema::dropIfExists('case_translations');
    }
}
