<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasicsEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basics_educations', function (Blueprint $table) {
            $table->id();
            $table->String('level');
            $table->String('country');
            $table->String('school');
            $table->String('index_no');
            $table->integer('start_year');
            $table->integer('end_year');
            $table->String('results_system');
            $table->String('results_grade');
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
        Schema::dropIfExists('basics_educations');
    }
}
