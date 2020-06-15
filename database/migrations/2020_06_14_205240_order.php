<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Order', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_id');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('type');
            $table->string('measurement');
            $table->string('delivary_charge');
            $table->string('price_per_unit');
            $table->string('total_price');
            $table->string('city');
            $table->string('address');
            $table->string('d_status');
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
        //
    }
}
