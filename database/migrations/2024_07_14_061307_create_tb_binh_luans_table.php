<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_binh_luans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tai_khoan_id');
            $table->unsignedBigInteger('san_pham_id');
            $table->text('noi_dung');
            $table->timestamp('thoi_gian');
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
        Schema::dropIfExists('tb_binh_luans');
    }
};
