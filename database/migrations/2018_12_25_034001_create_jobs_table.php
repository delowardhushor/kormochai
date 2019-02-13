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
            $table->string('salary_type');
            $table->string('office_hour');
            $table->string('location');
            $table->string('job_responsibility');
            $table->string('interview');
            $table->string('interview_date')->nullable();
            $table->string('job_date')->nullable();
            $table->string('job_type');
            $table->string('category');

            $table->string('name');
            $table->string('mobile');
            $table->string('area');
            $table->string('thana');
            $table->string('zila');
            $table->string('house');
            $table->string('admin_salary')->default(0);
            $table->string('salary_date');
            $table->string('employee_number');
            $table->string('employee_type');
            $table->string('active')->default(0);
            $table->string('hour')->nullable();
            $table->string('min')->nullable();
            $table->string('ampm')->nullable();
            $table->text('details')->nullable();

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
