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
        Schema::create('tb_don_hangs', function (Blueprint $table) {
            $table->id();
            $table->string('ma_don_hang')->unique();
            $table->unsignedBigInteger('nguoi_dung_id');
            $table->string('ten_nguoi_nhan');
            $table->string('email_nguoi_nhan');
            $table->string('so_dien_thoai_nguoi_nhan');
            $table->string('dia_chi_nguoi_nhan');
            $table->date('ngay_dat');
            $table->string('tong_tien');
            $table->text('ghi_chu')->nullable();
            $table->unsignedBigInteger('phuong_thuc_thanh_toan_id');
            $table->unsignedBigInteger('trang_thai_id');
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
        Schema::dropIfExists('tb_don_hangs');
    }
};
