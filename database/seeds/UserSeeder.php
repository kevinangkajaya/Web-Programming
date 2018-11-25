<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=0;$i<10;$i++) {
            DB::table('users')->insert([
                //'name' => str_random(5),
                'name' => $faker->name,
                'age' => rand(17,30),
                'address' => $faker->address,
                // 'hobby' => $faker->jobTitle,
                'gender'=> $faker->gender,
                'phone'=> $faker->rand();
            ]);
        }
    }
}
