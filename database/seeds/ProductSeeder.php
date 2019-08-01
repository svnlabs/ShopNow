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
    		'long_description'=>'

    		Kaski Fish
    		500 gm
    		',
    		'sku'=>'n4B4.kaski-fish-500-gm',
    		'manage_stock'=>1,
    		'quantity'=>8,
    		'in_stock'=>0,
    		'viewed'=>0,
    		'is_active'=>1,
    		'new_from'=>'2019-07-21',
    		'new_to'=>'2019-07-24',
    		'deleted_at'=>NULL,
    		'created_at'=>'2019-07-21 09:28:13',
    		'updated_at'=>'2019-07-22 00:47:34'
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
    		'long_description'=>'

    		Rui Fish
    		500 gm
    		Net Weight After Cutting ± 50 gm
    		৳315
    		',
    		'sku'=>'AMAW.rui-fish',
    		'manage_stock'=>1,
    		'quantity'=>8,
    		'in_stock'=>0,
    		'viewed'=>0,
    		'is_active'=>1,
    		'new_from'=>'2019-07-21',
    		'new_to'=>'2019-07-24',
    		'deleted_at'=>NULL,
    		'created_at'=>'2019-07-21 09:33:47',
    		'updated_at'=>'2019-07-22 01:01:29'
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
    		'long_description'=>'

    		Quality Brown Premium Egg
    		12 pcs
    		৳145
    		',
    		'sku'=>'fzcV.quality-brown-premium-egg',
    		'manage_stock'=>1,
    		'quantity'=>1,
    		'in_stock'=>0,
    		'viewed'=>0,
    		'is_active'=>1,
    		'new_from'=>'2019-07-21',
    		'new_to'=>'2019-07-23',
    		'deleted_at'=>NULL,
    		'created_at'=>'2019-07-21 09:38:47',
    		'updated_at'=>'2019-07-22 01:00:25'
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
    		'long_description'=>'

    		Quail Eggs
    		20 pcs
    		৳70
    		',
    		'sku'=>'AAkQ.quail-eggs',
    		'manage_stock'=>1,
    		'quantity'=>50,
    		'in_stock'=>0,
    		'viewed'=>0,
    		'is_active'=>1,
    		'new_from'=>'2019-07-21',
    		'new_to'=>'2019-07-25',
    		'deleted_at'=>NULL,
    		'created_at'=>'2019-07-21 09:40:20',
    		'updated_at'=>'2019-07-22 00:59:45'
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
    		'long_description'=>'

    		Double A A4 Size Paper (80 GSM) 1 Rim
    		৳500
    		',
    		'sku'=>'lp41.double-a-a4-size-paper',
    		'manage_stock'=>1,
    		'quantity'=>8,
    		'in_stock'=>0,
    		'viewed'=>0,
    		'is_active'=>1,
    		'new_from'=>'2019-07-21',
    		'new_to'=>'2019-07-24',
    		'deleted_at'=>NULL,
    		'created_at'=>'2019-07-21 10:45:02',
    		'updated_at'=>'2019-07-22 00:46:17'
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
    		'long_description'=>'

    		Bashundhara Paper A4 Size (80 GSM) 1 Rim
    		৳330
    		',
    		'sku'=>'vC8p.bashundhara-paper-a4-size',
    		'manage_stock'=>1,
    		'quantity'=>8,
    		'in_stock'=>0,
    		'viewed'=>0,
    		'is_active'=>1,
    		'new_from'=>'2019-07-21',
    		'new_to'=>'2019-07-24',
    		'deleted_at'=>NULL,
    		'created_at'=>'2019-07-21 10:47:08',
    		'updated_at'=>'2019-07-21 13:27:22'
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
    		'long_description'=>'

    		<ul><li>
            -1.6 liter Big transparent Unbreakable PC Jar.</li><li>-3 in 1 functions (Blender,Grinder and Mincer)with 2 mixer accessories</li><li>&nbsp;-220V , 50 Hz , 300W\r\n
            -High Quality Stainless Steel Blade.</li><li>&nbsp;-Multi Speed for selection ,Satisfy different needs.</li><li>&nbsp;-Motor Overheat with safety protection.&nbsp;</li><li>-High speed energy efficient pure copper coil motor .</li><li>&nbsp;-100% food grade material for healthy&nbsp;</li><li>&nbsp;-Easily take out the parts to clean&nbsp;</li><li>&nbsp;-2-pin VDE plug 
            </li></ul>
    		',
    		'sku'=>'Dfzg.classic-3-in-1-blender',
    		'manage_stock'=>1,
    		'quantity'=>1,
    		'in_stock'=>0,
    		'viewed'=>0,
    		'is_active'=>1,
    		'new_from'=>'2019-07-21',
    		'new_to'=>'2019-07-24',
    		'deleted_at'=>NULL,
    		'created_at'=>'2019-07-21 11:16:18',
    		'updated_at'=>'2019-07-22 00:45:47'
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
    		'long_description'=>'

    		<ul><li>
            -2.2L Rice Cooker</li><li>&nbsp;-Automatic Cook &amp; Keep warm function</li><li>-With Aluminium Steamer&nbsp;</li><li>&nbsp;-With Measure Cup &amp; Spoon</li><li>&nbsp;-Inner pot with inside non-stick coating  
            </li></ul>
    		',
    		'sku'=>'QLLa.rfl-vision-rice-cooker',
    		'manage_stock'=>1,
    		'quantity'=>8,
    		'in_stock'=>0,
    		'viewed'=>0,
    		'is_active'=>1,
    		'new_from'=>'2019-07-21',
    		'new_to'=>'2019-07-24',
    		'deleted_at'=>NULL,
    		'created_at'=>'2019-07-21 11:20:26',
    		'updated_at'=>'2019-07-22 01:00:59'
    	] );
    }
}
