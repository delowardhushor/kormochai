<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employers_id');
            $table->string('company_name');
            $table->string('job_title');
            $table->string('education');
            $table->string('salary');
            $table->string('office_hour');
            $table->string('location');
            $table->string('job_responsibility');
            $table->string('interview');
            $table->string('interview_date')->nullable();
            $table->string('job_date')->nullable();
            $table->string('job_type');
            $table->string('category');
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
        Schema::dropIfExists('jobs');
    }
}
