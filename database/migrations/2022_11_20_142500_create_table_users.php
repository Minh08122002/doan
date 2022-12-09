<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableNguoidung extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_nguoidung', function (Blueprint $table) {
            $table->id('nguoi_dung_id');
            $table->string('username');
            $table->string('password');
            $table->string('name');
            $table->string('email');
            $table->string('avatar')->nullable();
            $table->string('money')->nullable();
            $table->text('so_tin')->nullable();
            $table->boolean('trang_thai')->nullable();
            $table->string('dia_chi')->nullable();
            $table->timestamps();
            $table->rememberToken();    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_nguoidung');
    }
}
