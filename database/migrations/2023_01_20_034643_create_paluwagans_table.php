<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaluwagansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paluwagans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('address');
            $table->string('gcash_number');
            $table->dateTime('start_at');
            $table->dateTime('end_at');
            $table->integer('percent');
            $table->double('amount_started', 8, 2);
            $table->bigInteger('status_id');
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
        Schema::dropIfExists('paluwagans');
    }
}
