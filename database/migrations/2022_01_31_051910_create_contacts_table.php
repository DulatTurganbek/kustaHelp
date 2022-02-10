<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('phone', 20);
            $table->string('email', 100);
            $table->string('address');
            $table->string('operating_mode');
            $table->string('whatsapp', 500)->nullable();
            $table->string('youtube', 500)->nullable();
            $table->string('instagram', 500)->nullable();
            $table->string('facebook', 500)->nullable();
            $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
