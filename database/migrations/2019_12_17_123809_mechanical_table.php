<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MechanicalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mechanicals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('brand', 20);
            $table->string('name', 20);
            $table->integer('weight');
            $table->integer('click');
            $table->integer('noise');
            $table->integer('response');
            $table->string('description');
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
        Schema::dropIfExists('mechanicals');
    }
}
