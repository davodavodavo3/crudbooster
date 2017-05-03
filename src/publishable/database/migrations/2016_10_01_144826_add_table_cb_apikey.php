<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableCbApikey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cb_apikey', function (Blueprint $table) {
            $table->increments('id');
            $table->string('secret_key')->nullable();
            $table->integer('hit')->nullable();
            $table->string('status',25)->default('active');

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
        Schema::drop('cb_apikey');
    }
}