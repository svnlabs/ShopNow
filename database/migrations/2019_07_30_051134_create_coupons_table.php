<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->index();
            $table->decimal('value')->unsigned()->nullable();
            $table->boolean('is_percent');
            $table->boolean('free_shipping');
            $table->decimal('minimum_spend')->unsigned()->nullable();
            $table->decimal('maximum_spend')->unsigned()->nullable();
            $table->integer('usage_limit_per_coupon')->unsigned()->nullable();
            $table->integer('usage_limit_per_customer')->unsigned()->nullable();
            $table->integer('used')->default(0);
            $table->boolean('is_active');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
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
        Schema::dropIfExists('coupons');
    }
}
