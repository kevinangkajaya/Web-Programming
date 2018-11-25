<?php

use Illuminate\Database\Seeder;
use Carbon\carbon;

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
            'id' => 1,
            'categoryName' => 'Boys',
            'categoryGender' => 'Male',
            'categoryAge' => 17,
            'created_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('categories')->insert([
            'id' => 2,
            'categoryName' => 'Girls',
            'categoryGender' => 'Female',
            'categoryAge' => 17,
            'created_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('categories')->insert([
            'id' => 3,
            'categoryName' => 'Unisex',
            'categoryGender' => 'Unisex',
            'categoryAge' => 17,
            'created_at' => Carbon::now()->toDateTimeString()
        ]);   
        DB::table('categories')->insert([
            'id' => 12,
            'categoryName' => 'zz',
            'categoryGender' => 'zz',
            'categoryAge' => 17,
            'created_at' => Carbon::now()->toDateTimeString()
        ]);     
    }
}
