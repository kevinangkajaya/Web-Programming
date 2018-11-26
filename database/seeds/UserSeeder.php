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
        DB::table('users')->insert([
            'name' => 'Tony Q',
            'email'=> 'tonyQ@haha.com',
            'address' => 'Ketapang Street',
            'gender'=> 'male',
            'phone'=> random_int(0, 13)
        ]);   
    }
}
