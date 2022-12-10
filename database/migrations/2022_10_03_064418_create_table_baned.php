<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBaned extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baned', function (Blueprint $table) {
            $table->id('nguoi_dung_id');
            $table->string('ten_nguoi_dung');
            $table->string('ly_do');
            $table->datetime('ngay_bi_ban');
            $table->datetime('ban_den');
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
        Schema::dropIfExists('table_baned');
    }
}
