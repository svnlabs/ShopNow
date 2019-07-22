<?php

use Illuminate\Database\Seeder;
use App\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Brand::create( [
    		'id'=>2,
    		'name'=>'Angel',
    		'category_id'=>3,
    		'is_active'=>1,
    		'created_at'=>'2019-07-21 08:45:53',
    		'updated_at'=>'2019-07-21 08:45:53'
    	] );



    	Brand::create( [
    		'id'=>3,
    		'name'=>'Twinkle',
    		'category_id'=>3,
    		'is_active'=>1,
    		'created_at'=>'2019-07-21 08:58:44',
    		'updated_at'=>'2019-07-21 08:58:44'
    	] );



    	Brand::create( [
    		'id'=>4,
    		'name'=>'Smartcare',
    		'category_id'=>3,
    		'is_active'=>1,
    		'created_at'=>'2019-07-21 08:59:10',
    		'updated_at'=>'2019-07-21 08:59:10'
    	] );



    	Brand::create( [
    		'id'=>5,
    		'name'=>'Nestlé',
    		'category_id'=>4,
    		'is_active'=>1,
    		'created_at'=>'2019-07-21 09:01:02',
    		'updated_at'=>'2019-07-21 09:01:02'
    	] );



    	Brand::create( [
    		'id'=>6,
    		'name'=>'Double A',
    		'category_id'=>12,
    		'is_active'=>1,
    		'created_at'=>'2019-07-21 10:41:30',
    		'updated_at'=>'2019-07-21 10:41:30'
    	] );






    }
}
