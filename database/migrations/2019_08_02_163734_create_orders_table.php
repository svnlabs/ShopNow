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
            $table->integer('user_id')->nullable()->index();         
            
            $table->string('shipping_name');
            
            $table->string('shipping_address1');
            $table->string('shipping_address2')->nullable();
            $table->string('shipping_city');            
            $table->string('shipping_zip');            
            $table->decimal('sub_total', 18, 2)->unsigned();
            $table->string('shipping_method');
            $table->decimal('shipping_cost', 18, 2)->unsigned();
            $table->integer('coupon_id')->nullable()->index();
            $table->integer('discount')->unsigned();
            $table->decimal('total', 18, 2)->unsigned();
            $table->string('payment_method');           
            
            $table->string('status');
            $table->softDeletes();
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
        Schema::dropIfExists('orders');
    }
}
