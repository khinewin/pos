<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnsalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onsales', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('cart');
            $table->string('customer_name');
            $table->float('totalAmount');
            $table->float('payment');
            $table->float('credit');
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('onsales');
    }
}
