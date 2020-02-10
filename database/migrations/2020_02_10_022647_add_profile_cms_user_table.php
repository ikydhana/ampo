<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProfileCmsUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cms_users', function (Blueprint $table) {
            $table->string('id_jurusan')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('alamat')->nullable();
            $table->string('notlp')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cms_users', function (Blueprint $table) {
            $table->dropColumn('id_jurusan');
            $table->dropColumn('tempat_lahir');
            $table->dropColumn('tanggal_lahir');
            $table->dropColumn('alamat');
            $table->dropColumn('notlp');
        });
    }
}
