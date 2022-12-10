<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('username');
            $table->string('password');
            $table->string('name');
            $table->string('email');
           
            $table->string('avatar')->nullable();
            $table->string('money')->nullable();
            $table->text('so_tin')->nullable();
            $table->integer('trang_thai')->default(0);
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
        Schema::dropIfExists('table_tai_khoan');
    }
}
