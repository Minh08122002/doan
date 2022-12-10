<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tins', function (Blueprint $table) {
            $table->id('id');
            $table->string('user_id');
            $table->string('loai_tin'); 
            $table->string('tieu_de');
            $table->string('tinh_thanh_pho')->nullable();
            $table->date('thoi_gian');
            $table->string('file')->nullable();
            $table->string('noi_dung')->nullable();
            $table->string('binh_luan')->nullable();
            $table->string('trang_thai')->default('0');
            $table->tinyText('so_nguoi_quan_tam')->nullable();
            $table->string('lien_lac')->nullable();
            $table->string('report')->nullable();
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
        Schema::dropIfExists('tins');
    }
}
