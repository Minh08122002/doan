<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTinnhan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tinnhan', function (Blueprint $table) {
            $table->id('nguoi_nhan_id');
            //$table->id('id_TN');
            $table->string('nguoi_gui');
            $table->boolean('trang_thai');

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
        Schema::dropIfExists('table_tinnhan');
    }
}
