<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_works', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullabel();
            $table->string('high_school:')->nullabel();
            $table->string('college')->nullabel();
            $table->string('degree')->nullabel();
            $table->string('institutions')->nullabel();
            $table->string('job_status')->nullabel();
            $table->string('designation')->nullabel();
            $table->string('skills')->nullabel();
            $table->longText('works')->nullabel();
            $table->string('linkedin')->nullabel();
            $table->tinyInteger('status')->define(0);
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
        Schema::dropIfExists('education_works');
    }
}
