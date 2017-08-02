<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('customer');
            $table->text('cart');
            $table->integer('user_id');
            $table->integer('deliver_status')->nullable()->defalut('0');
            $table->integer('cash_status')->nullable()->defalut('0');
            $table->integer('casher_id')->nullable()->defalut('0');
            $table->dateTime('cash_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
