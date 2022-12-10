<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableNaptien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('naptien', function (Blueprint $table) {
            $table->id('nguoi_dung_id');
            $table->string('ten_nguoi_dung');
            $table->string('phuong_thuc');
            $table->string('so_tien');
            $table->string('xac_nhan');
            $table->string('trang_thai');
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
        Schema::dropIfExists('table_naptien');
    }
}
