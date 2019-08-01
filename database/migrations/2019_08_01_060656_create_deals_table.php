<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deals', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title')->nullable();
            $table->string('description')->nullable();
            
            $table->string('link')->nullable();
            $table->string('is_active');
            $table->date('start_date');
            $table->date('end_date');

            $table->string('back_image')->nullable();
            $table->string('front_image')->nullable();

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
        Schema::dropIfExists('deals');
    }
}
