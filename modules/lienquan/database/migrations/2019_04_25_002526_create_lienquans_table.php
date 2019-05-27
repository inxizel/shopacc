<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLienquansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lienquans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('loainick');
            $table->char('taikhoan', 30)->unique();
            $table->string('matkhau');
            $table->string('champs')->nullable();
            $table->string('skins')->nullable();
            $table->integer('ip');
            $table->integer('season');
            $table->integer('rank_id');
            $table->integer('gia');
            $table->integer('giamgia')->default(0);
            $table->integer('fb')->default(1);;
            $table->integer('thongtin');
            $table->integer('uutien')->default(0);
            $table->string('trangthai');
            $table->string('kichhoat');
            $table->integer('count_champs');
            $table->integer('count_skins');
            $table->integer('count_bangngoc');
            $table->integer('diemngoc');
            $table->integer('thumb_id')->nullable();
            $table->integer('image_id')->nullable();
            $table->integer('user_id');

            $table->tinyInteger('status')->default(1)->comment('0: hide, 1: show');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lienquans');
    }
}
