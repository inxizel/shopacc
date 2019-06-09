<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLienquanLichsumuasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lienquan_lichsumuas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uid');
            $table->integer('idacc');
            $table->string('loainick');
            $table->string('taikhoan');
            $table->string('matkhau');
            $table->integer('gia');
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
        Schema::dropIfExists('lienquan_lichsumuas');
    }
}
