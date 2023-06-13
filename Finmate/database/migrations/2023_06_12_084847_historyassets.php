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
        Schema::create('historyassets', function (Blueprint $table) {
            $table->integer('assetno'); //fk
            $table->integer('categoryno'); //fk
            $table->timestamps();
            $table->softDeletes();
            $table->char('transaction',1);
            $table->string('historyname',100)->nullable();

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
