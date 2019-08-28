<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAffiliationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affiliations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('job_type')->nullable();
            $table->string('job_status')->nullable();
            $table->string('organization')->nullable();
            $table->string('name')->nullable();
            $table->string('designation')->nullable();
            $table->string('duration_form')->nullable();
            $table->string('duration_to')->nullable();
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
        Schema::dropIfExists('affiliations');
    }
}
