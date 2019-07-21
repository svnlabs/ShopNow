<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Baby Care',
            'parent_id' => 0,
            'is_active' => 1,
        ]);
    }
}
