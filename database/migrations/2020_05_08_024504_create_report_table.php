<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report', function (Blueprint $table) {
            $table->increments('report_id');
            $table->integer('answer_id')->unsigned();
            $table->integer('language_id')->unsigned();

            $table->foreign('answer_id')->references('answer_id')->on('answers')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('language_id')->references('language_id')->on('language')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report');
    }
}
