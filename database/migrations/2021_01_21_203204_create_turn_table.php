<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turn', function (Blueprint $table) {
            $table->increments('id_Turn');
            $table->boolean('flag_status')->default(true);
            $table->datetime('date');
            $table->string('client');
            $table->string('priority_id');
            $table->string('requester_client_id');
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
        Schema::dropIfExists('turn');
    }
}
