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
            'categoryName' => 'Boys',
            'categoryGender' => 'Male',
            'categoryAge' => 10,
            'created_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('categories')->insert([
            'categoryName' => 'Girls',
            'categoryGender' => 'Female',
            'categoryAge' => 12,
            'created_at' => Carbon::now()->toDateTimeString()
        ]);
    }
}
