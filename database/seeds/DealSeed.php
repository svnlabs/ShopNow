<?php

use Illuminate\Database\Seeder;
use App\Deal;
class DealSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Deal::create( [
    		'id'=>2,
    		'title'=>'Talk Of The Town Now!!',
    		'description'=>'Upto 100% discount',
    		'link'=>'http://localhost/ShopNow/public/shop/category/10',
    		'is_active'=>'on',
    		'start_date'=>'2019-08-01',
    		'end_date'=>'2019-08-06',
    		'back_image'=>'1564647595.jpg',
    		'front_image'=>'1564645422.png',
    		'created_at'=>'2019-08-01 01:43:43',
    		'updated_at'=>'2019-08-01 02:19:56'
    	] );
    }
}
