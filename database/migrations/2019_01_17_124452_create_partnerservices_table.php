<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnerservicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partnerservices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('partners_id');
            $table->string('name');
            $table->string('phone');
            $table->string('compnay_name');
            $table->string('per_area');
            $table->string('per_thana');
            $table->string('per_district');
            $table->string('per_house');
            $table->string('pre_area');
            $table->string('pre_thana');
            $table->string('pre_district');
            $table->string('pre_house');
            $table->string('profession');
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
        Schema::dropIfExists('partnerservices');
    }
}
