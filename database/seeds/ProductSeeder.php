<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Product::create( [
            'id'=>5,
            'name'=>'Kaski Fish 500 gm',
            'tax_class_id'=>NULL,
            'category_id'=>7,
            'brand_id'=>NULL,
            'slug'=>'kaski-fish-500-gm',
            'price'=>305,
            'special_price'=>NULL,
            'special_price_start'=>NULL,
            'special_price_end'=>NULL,
            'selling_price'=>300,
            'image'=>'VUvQEcjGAcckncWI.jpg',
            'short_description'=>NULL,
            'long_description'=>'\r\n\r\n           Kaski Fish\r\n          500 gm\r\n          ',
            'sku'=>'n4B4.kaski-fish-500-gm',
            'manage_stock'=>1,
            'quantity'=>8,
            'in_stock'=>0,
            'viewed'=>0,
            'is_active'=>1,
            'new_from'=>'2019-07-21',
            'new_to'=>'2019-07-24',
            'deleted_at'=>NULL,
            'created_at'=>'2019-07-21 03:28:13',
            'updated_at'=>'2019-07-21 18:47:34'
        ] );


        
        Product::create( [
            'id'=>6,
            'name'=>'Rui Fish',
            'tax_class_id'=>NULL,
            'category_id'=>7,
            'brand_id'=>NULL,
            'slug'=>'rui-fish',
            'price'=>315,
            'special_price'=>NULL,
            'special_price_start'=>NULL,
            'special_price_end'=>NULL,
            'selling_price'=>300,
            'image'=>'W99qdTJ68Inn1BVr.jpg',
            'short_description'=>NULL,
            'long_description'=>'\r\n\r\n           Rui Fish\r\n            500 gm\r\n          Net Weight After Cutting ± 50 gm\r\n            ৳315\r\n            ',
            'sku'=>'AMAW.rui-fish',
            'manage_stock'=>1,
            'quantity'=>8,
            'in_stock'=>0,
            'viewed'=>0,
            'is_active'=>1,
            'new_from'=>'2019-07-21',
            'new_to'=>'2019-07-24',
            'deleted_at'=>NULL,
            'created_at'=>'2019-07-21 03:33:47',
            'updated_at'=>'2019-07-21 19:01:29'
        ] );


        
        Product::create( [
            'id'=>7,
            'name'=>'Quality Brown Premium Egg',
            'tax_class_id'=>NULL,
            'category_id'=>9,
            'brand_id'=>NULL,
            'slug'=>'quality-brown-premium-egg',
            'price'=>145,
            'special_price'=>NULL,
            'special_price_start'=>NULL,
            'special_price_end'=>NULL,
            'selling_price'=>140,
            'image'=>'YOW9QeVPuatJcmKY.png',
            'short_description'=>NULL,
            'long_description'=>'\r\n\r\n           Quality Brown Premium Egg\r\n           12 pcs\r\n          ৳145\r\n            ',
            'sku'=>'fzcV.quality-brown-premium-egg',
            'manage_stock'=>1,
            'quantity'=>1,
            'in_stock'=>0,
            'viewed'=>0,
            'is_active'=>1,
            'new_from'=>'2019-07-21',
            'new_to'=>'2019-07-23',
            'deleted_at'=>NULL,
            'created_at'=>'2019-07-21 03:38:47',
            'updated_at'=>'2019-07-21 19:00:25'
        ] );


        
        Product::create( [
            'id'=>8,
            'name'=>'Quail Eggs',
            'tax_class_id'=>NULL,
            'category_id'=>9,
            'brand_id'=>NULL,
            'slug'=>'quail-eggs',
            'price'=>70,
            'special_price'=>NULL,
            'special_price_start'=>NULL,
            'special_price_end'=>NULL,
            'selling_price'=>65,
            'image'=>'O5VXVlAGDHKikHmr.jpg',
            'short_description'=>NULL,
            'long_description'=>'\r\n\r\n           Quail Eggs\r\n          20 pcs\r\n          ৳70\r\n         ',
            'sku'=>'AAkQ.quail-eggs',
            'manage_stock'=>1,
            'quantity'=>50,
            'in_stock'=>0,
            'viewed'=>0,
            'is_active'=>1,
            'new_from'=>'2019-07-21',
            'new_to'=>'2019-07-25',
            'deleted_at'=>NULL,
            'created_at'=>'2019-07-21 03:40:20',
            'updated_at'=>'2019-07-21 18:59:45'
        ] );


        
        Product::create( [
            'id'=>9,
            'name'=>'Double A A4 Size Paper',
            'tax_class_id'=>NULL,
            'category_id'=>12,
            'brand_id'=>6,
            'slug'=>'double-a-a4-size-paper',
            'price'=>245,
            'special_price'=>NULL,
            'special_price_start'=>NULL,
            'special_price_end'=>NULL,
            'selling_price'=>240,
            'image'=>'uP8mPfIxvaRD7tTo.png',
            'short_description'=>NULL,
            'long_description'=>'\r\n\r\n           Double A A4 Size Paper (80 GSM) 1 Rim\r\n           ৳500\r\n            ',
            'sku'=>'lp41.double-a-a4-size-paper',
            'manage_stock'=>1,
            'quantity'=>8,
            'in_stock'=>0,
            'viewed'=>0,
            'is_active'=>1,
            'new_from'=>'2019-07-21',
            'new_to'=>'2019-07-24',
            'deleted_at'=>NULL,
            'created_at'=>'2019-07-21 04:45:02',
            'updated_at'=>'2019-07-21 18:46:17'
        ] );


        
        Product::create( [
            'id'=>10,
            'name'=>'Bashundhara Paper A4 Size',
            'tax_class_id'=>NULL,
            'category_id'=>12,
            'brand_id'=>NULL,
            'slug'=>'bashundhara-paper-a4-size',
            'price'=>330,
            'special_price'=>NULL,
            'special_price_start'=>NULL,
            'special_price_end'=>NULL,
            'selling_price'=>300,
            'image'=>'62MtUieZo5DepYXd.jpg',
            'short_description'=>NULL,
            'long_description'=>'\r\n\r\n           Bashundhara Paper A4 Size (80 GSM) 1 Rim\r\n            ৳330\r\n            ',
            'sku'=>'vC8p.bashundhara-paper-a4-size',
            'manage_stock'=>1,
            'quantity'=>8,
            'in_stock'=>0,
            'viewed'=>0,
            'is_active'=>1,
            'new_from'=>'2019-07-21',
            'new_to'=>'2019-07-24',
            'deleted_at'=>NULL,
            'created_at'=>'2019-07-21 04:47:08',
            'updated_at'=>'2019-07-21 07:27:22'
        ] );


        
        Product::create( [
            'id'=>11,
            'name'=>'Classic 3 In 1 Blender',
            'tax_class_id'=>NULL,
            'category_id'=>14,
            'brand_id'=>NULL,
            'slug'=>'classic-3-in-1-blender',
            'price'=>1990,
            'special_price'=>NULL,
            'special_price_start'=>NULL,
            'special_price_end'=>NULL,
            'selling_price'=>1900,
            'image'=>'ubjBVQ8GjuIv9gP3.jpg',
            'short_description'=>NULL,
            'long_description'=>'\r\n\r\n           

            \r\n            -1.6 liter Big transparent Unbreakable PC Jar.
            -3 in 1 functions (Blender,Grinder and Mincer)with 2 mixer accessories
            -220V , 50 Hz , 300W\\r\\n\r\n            -High Quality Stainless Steel Blade.
            -Multi Speed for selection ,Satisfy different needs.
            -Motor Overheat with safety protection. 
            -High speed energy efficient pure copper coil motor .
            -100% food grade material for healthy 
            -Easily take out the parts to clean 
            -2-pin VDE plug \r\n            
            \r\n            ',
            'sku'=>'Dfzg.classic-3-in-1-blender',
            'manage_stock'=>1,
            'quantity'=>1,
            'in_stock'=>0,
            'viewed'=>0,
            'is_active'=>1,
            'new_from'=>'2019-07-21',
            'new_to'=>'2019-07-24',
            'deleted_at'=>NULL,
            'created_at'=>'2019-07-21 05:16:18',
            'updated_at'=>'2019-07-21 18:45:47'
        ] );

        
        Product::create( [
            'id'=>12,
            'name'=>'RFL Vision Rice Cooker',
            'tax_class_id'=>NULL,
            'category_id'=>14,
            'brand_id'=>NULL,
            'slug'=>'rfl-vision-rice-cooker',
            'price'=>2450,
            'special_price'=>NULL,
            'special_price_start'=>NULL,
            'special_price_end'=>NULL,
            'selling_price'=>2450,
            'image'=>'WT34HP1UMBfzs3tc.jpg',
            'short_description'=>NULL,
            'long_description'=>'\r\n\r\n           

            \r\n            -2.2L Rice Cooker
            -Automatic Cook & Keep warm function
            -With Aluminium Steamer 
            -With Measure Cup & Spoon
            -Inner pot with inside non-stick coating  \r\n            
            \r\n            ',
            'sku'=>'QLLa.rfl-vision-rice-cooker',
            'manage_stock'=>1,
            'quantity'=>8,
            'in_stock'=>0,
            'viewed'=>0,
            'is_active'=>1,
            'new_from'=>'2019-07-21',
            'new_to'=>'2019-07-24',
            'deleted_at'=>NULL,
            'created_at'=>'2019-07-21 05:20:26',
            'updated_at'=>'2019-07-21 19:00:59'
        ] );

        
        Product::create( [
            'id'=>13,
            'name'=>'Pedia Sure Premium Chocolate Jar',
            'tax_class_id'=>NULL,
            'category_id'=>4,
            'brand_id'=>4,
            'slug'=>'pedia-sure-premium-chocolate-jar',
            'price'=>746,
            'special_price'=>740,
            'special_price_start'=>'2019-08-01',
            'special_price_end'=>'2019-08-04',
            'selling_price'=>NULL,
            'image'=>'W1DSEEdGJFXMKLnd.png',
            'short_description'=>'Pedia Sure Premium Chocolate Jar',
            'long_description'=>'

            Pedia Sure Premium Chocolate Jar
            Pedia Sure Premium Chocolate Jar
            Pedia Sure Premium Chocolate Jar
            ',
            'sku'=>'lIun.pedia-sure-premium-chocolate-jar',
            'manage_stock'=>1,
            'quantity'=>100,
            'in_stock'=>0,
            'viewed'=>0,
            'is_active'=>1,
            'new_from'=>'2019-08-01',
            'new_to'=>'2019-08-04',
            'deleted_at'=>NULL,
            'created_at'=>'2019-07-31 23:39:54',
            'updated_at'=>'2019-07-31 23:46:25'
        ] );
    }
}
