<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourtTypeTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('court_type_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('court_type_id');
            $table->string('locale')->index();
            $table->string('title');
            $table->text('description')->nullable();
            $table->foreign('court_type_id')->references('id')->on('court_types')->onDelete('cascade');
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
        Schema::dropIfExists('court_type_translations');
    }
}
