<?php

use Illuminate\Database\Seeder;
use App\Slider;
class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Slider::create( [
    		'id'=>1,
    		'title'=>NULL,
    		'feature'=>NULL,
    		'image1'=>'1564600453.png',
    		'image2'=>NULL,
    		'image3'=>NULL,
    		'hide_product'=>'on',
    		'created_at'=>'2019-07-31 13:14:13',
    		'updated_at'=>'2019-07-31 13:14:13'
    	] );

    	Slider::create( [
    		'id'=>2,
    		'title'=>NULL,
    		'feature'=>NULL,
    		'image1'=>'1564603490.jpg',
    		'image2'=>NULL,
    		'image3'=>NULL,
    		'hide_product'=>NULL,
    		'created_at'=>'2019-07-31 13:14:56',
    		'updated_at'=>'2019-07-31 14:04:50'
    	] );

    	Slider::create( [
    		'id'=>3,
    		'title'=>NULL,
    		'feature'=>NULL,
    		'image1'=>'1564600509.png',
    		'image2'=>NULL,
    		'image3'=>NULL,
    		'hide_product'=>'on',
    		'created_at'=>'2019-07-31 13:15:09',
    		'updated_at'=>'2019-07-31 13:48:22'
    	] );
    }
}
