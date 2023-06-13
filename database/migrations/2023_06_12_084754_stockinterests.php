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
        Schema::create('stockinterests', function (Blueprint $table) {
            // 글번호, 제목, 내용, 작성일, 수정일, 삭제일자, 삭제여부
            $table->id('assetNo');
            $table->sting('assetType',30);
            $table->string('assetName',40)->unique();
            $table->integer('balance');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
