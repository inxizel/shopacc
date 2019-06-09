<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLienquanNapthesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lienquan_napthes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uid');
            $table->integer('loaithe');
            $table->string('serial');
            $table->string('mathe');
            $table->string('menhgia');
            $table->string('trangthai')->default(0);
            $table->integer('user_id')->default(0);
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
        Schema::dropIfExists('lienquan_napthes');
    }
}
