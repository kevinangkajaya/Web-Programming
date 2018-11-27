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
            'id' => 1,
            'name' => 'admin',
            'email'=> 'admin@admin.com',
            'password' => Hash::make('adminadmin'),
            'phone' => '08333444555',
            'address' => 'Jakarta',
            'gender'=> 'male',
            'pfp' => 'cat-01.png',
        ]); 
        DB::table('users')->insert([
            'name' => 'Tony Q',
            'email'=> 'tonyQ@haha.com',
            'password' => 'tonyxxzzmm',
            'phone' => '08121212134',
            'address' => 'Ketapang Street',
            'gender'=> 'male',
        ]);   
    }
}
