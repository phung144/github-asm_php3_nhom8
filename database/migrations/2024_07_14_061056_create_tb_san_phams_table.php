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
        Schema::create('tb_san_phams', function (Blueprint $table) {
            $table->id();
            $table->string('ten_san_pham');
            $table->integer('so_luong');
            $table->string('gia_san_pham');
            $table->string('gia_khuyen_mai')->nullable();
            $table->date('ngay_nhap');
            $table->text('mo_ta')->nullable();
            $table->unsignedBigInteger('danh_muc_id');
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
        Schema::dropIfExists('tb_san_phams');
    }
};
