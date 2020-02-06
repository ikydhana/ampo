<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembimbingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembimbing', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pembimbing_sekolah');
            $table->integer('id_pembimbing_lapangan');
            $table->integer('id_tempat_magang');
            $table->integer('id_cms_user');
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
        Schema::dropIfExists('pembimbing');
    }
}
