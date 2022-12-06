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
        Schema::create('table_tin', function (Blueprint $table) {
            $table->id('nguoi_dung_id');
            $table->string('user_name');
            $table->string('id');
            $table->string('tieu_de');
            $table->string('loai_tin');
            $table->date('thoi_gian');
            $table->string('file');
            $table->string('noi_dung');
            $table->string('binh_luan');
            $table->string('trang_thai')->default('0');
            $table->tinyText('so_nguoi_quan_tam');
            $table->string('lien_lac');
            $table->string('report');
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
        Schema::dropIfExists('table_tin');
    }
}
