<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create( [
            'id'=>2,
            'name'=>'Baby Care',
            'parent_id'=>0,
            'slug'=>'baby-care',
            'position'=>1,
            'is_searchable'=>0,
            'is_active'=>1,
            'created_at'=>'2019-07-21 08:43:26',
            'updated_at'=>'2019-07-21 08:43:26'
        ] );
        
        Category::create( [
            'id'=>3,
            'name'=>'Feeders',
            'parent_id'=>2,
            'slug'=>'feeders',
            'position'=>1,
            'is_searchable'=>0,
            'is_active'=>1,
            'created_at'=>'2019-07-21 08:43:59',
            'updated_at'=>'2019-07-21 08:43:59'
        ] );
        
        Category::create( [
            'id'=>4,
            'name'=>'Fooding',
            'parent_id'=>2,
            'slug'=>'fooding',
            'position'=>2,
            'is_searchable'=>0,
            'is_active'=>1,
            'created_at'=>'2019-07-21 09:00:20',
            'updated_at'=>'2019-07-21 09:00:20'
        ] );
        
        Category::create( [
            'id'=>5,
            'name'=>'Food',
            'parent_id'=>0,
            'slug'=>'food',
            'position'=>3,
            'is_searchable'=>1,
            'is_active'=>1,
            'created_at'=>'2019-07-21 09:02:09',
            'updated_at'=>'2019-07-21 09:02:09'
        ] );
        
        Category::create( [
            'id'=>6,
            'name'=>'Meat & Fish',
            'parent_id'=>5,
            'slug'=>'meat-fish',
            'position'=>1,
            'is_searchable'=>1,
            'is_active'=>1,
            'created_at'=>'2019-07-21 09:03:05',
            'updated_at'=>'2019-07-21 09:03:05'
        ] );
        
        Category::create( [
            'id'=>7,
            'name'=>'Fresh Fish',
            'parent_id'=>6,
            'slug'=>'fresh-fish',
            'position'=>1,
            'is_searchable'=>1,
            'is_active'=>1,
            'created_at'=>'2019-07-21 09:06:04',
            'updated_at'=>'2019-07-21 09:06:04'
        ] );
        
        Category::create( [
            'id'=>8,
            'name'=>'Dairy',
            'parent_id'=>5,
            'slug'=>'dairy',
            'position'=>2,
            'is_searchable'=>0,
            'is_active'=>1,
            'created_at'=>'2019-07-21 09:36:09',
            'updated_at'=>'2019-07-21 09:36:09'
        ] );
        
        Category::create( [
            'id'=>9,
            'name'=>'Egg',
            'parent_id'=>8,
            'slug'=>'egg',
            'position'=>1,
            'is_searchable'=>1,
            'is_active'=>1,
            'created_at'=>'2019-07-21 09:37:10',
            'updated_at'=>'2019-07-21 09:37:10'
        ] );
        
        Category::create( [
            'id'=>10,
            'name'=>'Office Products',
            'parent_id'=>0,
            'slug'=>'office-products',
            'position'=>1,
            'is_searchable'=>0,
            'is_active'=>1,
            'created_at'=>'2019-07-21 10:39:40',
            'updated_at'=>'2019-07-21 10:39:40'
        ] );
        
        Category::create( [
            'id'=>11,
            'name'=>'Printing',
            'parent_id'=>10,
            'slug'=>'printing',
            'position'=>1,
            'is_searchable'=>0,
            'is_active'=>1,
            'created_at'=>'2019-07-21 10:40:12',
            'updated_at'=>'2019-07-21 10:40:12'
        ] );
        
        Category::create( [
            'id'=>12,
            'name'=>'Paper',
            'parent_id'=>11,
            'slug'=>'paper',
            'position'=>1,
            'is_searchable'=>1,
            'is_active'=>1,
            'created_at'=>'2019-07-21 10:40:47',
            'updated_at'=>'2019-07-21 10:40:47'
        ] );
        
        Category::create( [
            'id'=>13,
            'name'=>'Home Appliances',
            'parent_id'=>0,
            'slug'=>'home-appliances',
            'position'=>3,
            'is_searchable'=>0,
            'is_active'=>1,
            'created_at'=>'2019-07-21 10:48:25',
            'updated_at'=>'2019-07-21 10:48:25'
        ] );
        
        Category::create( [
            'id'=>14,
            'name'=>'Kitchen Appliances',
            'parent_id'=>13,
            'slug'=>'kitchen-appliances',
            'position'=>1,
            'is_searchable'=>0,
            'is_active'=>1,
            'created_at'=>'2019-07-21 11:13:57',
            'updated_at'=>'2019-07-21 11:13:57'
        ] );
    }
}
