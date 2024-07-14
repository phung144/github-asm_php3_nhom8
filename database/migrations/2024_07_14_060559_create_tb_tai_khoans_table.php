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
        Schema::create('tb_tai_khoans', function (Blueprint $table) {
            $table->id();
            $table->string('anh_dai_dien')->nullable();
            $table->string('ho_ten');
            $table->string('email')->unique();
            $table->string('so_dien_thoai');
            $table->string('gioi_tinh');
            $table->string('dia_chi');
            $table->date('ngay_sinh');
            $table->string('mat_khau');
            $table->unsignedBigInteger('chuc_vu_id');
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
        Schema::dropIfExists('tb_tai_khoans');
    }
};
