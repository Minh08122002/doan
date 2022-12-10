<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCTmuahang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ctmuahang', function (Blueprint $table) {
            $table->id('nguoi_dung_id');
            $table->text('ma_giao_dich');
            $table->text('gia_tien');
            $table->string('hinh_thuc');

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
        Schema::dropIfExists('table__c_tmuahang');
    }
}
