<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prof_educations', function (Blueprint $table) {
            $table->id();
            $table->String('level');
            $table->String('country');
            $table->String('school');
            $table->String('institition_name');
            $table->String('programe_name');
            $table->String('current_education');
            $table->String('reg_no');
            $table->String('nacte');
            $table->integer('start_month');
            $table->integer('end_month');
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
        Schema::dropIfExists('prof_educations');
    }
}
