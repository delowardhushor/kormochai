<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientservicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientservices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('clients_id');
            $table->string('name');
            $table->string('phone');
            $table->string('service');
            $table->string('area');
            $table->string('thana');
            $table->string('district');
            $table->string('house');
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
        Schema::dropIfExists('clientservices');
    }
}
