<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BillDetail extends Migration
{
    public function up()
    {
        //
        Schema::create('bill_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bill_id');
            $table->integer('product_id');
            $table->integer('quantity');
            $table->float('unit_price',8,2);
            $table->timestamps();
            $table->softDeletes();
            
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
        Schema::dropIfExists('bill_detail');
    }
}
