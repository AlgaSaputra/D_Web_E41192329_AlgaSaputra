<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDbLowker extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perusahaan', function (Blueprint $table) {
            $table->increments('id_usaha');
            $table->string('nm_usaha', 30);
            $table->text('alamat');
            $table->integer('telp');
            $table->string('username', 30);
            $table->string('password', 30);
        });

        Schema::create('user', function (Blueprint $table) {
            $table->increments('id_user');
            $table->string('nm_user', 30);
            $table->string('jk', 30);
            $table->text('alamat');
            $table->integer('telp');
            $table->string('username', 30);
            $table->string('password', 30);
        });

        Schema::create('admin', function (Blueprint $table) {
            $table->increments('id_admin');
            $table->string('username', 30);
            $table->integer('password');
        });

        Schema::create('detail_lowker', function (Blueprint $table) {
            $table->increments('no');
            $table->integer('id_usaha');
            $table->integer('tlp');
            $table->text('alamat');
            $table->text('info_loker');
        });

        Schema::create('data_diri', function (Blueprint $table) {
            $table->increments('no');
            $table->integer('id_user');
            $table->text('pengenalan_diri');
            $table->text('alamat');
            $table->integer('telp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('db_lowker');
    }
}
