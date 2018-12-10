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
            'password' => 'adminadmin',
            'phone' => '08333444555',
            'address' => 'Jakarta',
            'gender'=> 'male',
            'pfp' => 'cat-01.png',
            'role' => 'admin'
        ]); 
        DB::table('users')->insert([
            'name' => 'Tony Q',
            'email'=> 'tonyQ@haha.com',
            'password' => 'tonyxxzzmm',
            'phone' => '08121212134',
            'address' => 'Ketapang Street',
            'gender'=> 'male',
            'role' => 'member'
        ]);   
        DB::table('users')->insert([
            'name' => 'Andy Lau',
            'email'=> 'andy@haha.com',
            'password' => 'andyshsas',
            'phone' => '0812938402',
            'address' => 'kojang Street',
            'gender'=> 'male',
            'role' => 'member'
        ]);   
        DB::table('users')->insert([
            'name' => 'Braxton J',
            'email'=> 'brax@haha.com',
            'password' => 'brax12903h',
            'phone' => '087851423695',
            'address' => 'johor Street',
            'gender'=> 'Female',
            'role' => 'member'
        ]);   
        DB::table('users')->insert([
            'name' => 'A Prabhu',
            'email'=> 'prabu@haha.com',
            'password' => 'prabuhssfdj',
            'phone' => '087850605356',
            'address' => 'jompo Street',
            'gender'=> 'male',
            'role' => 'member'
        ]);   
        DB::table('users')->insert([
            'name' => 'Aarti Lohia',
            'email'=> 'aarti@haha.com',
            'password' => 'aarti983123h',
            'phone' => '08563455826',
            'address' => 'muhes Street',
            'gender'=> 'Female',
            'role' => 'member'
        ]);   
        DB::table('users')->insert([
            'name' => 'Agus Djohari',
            'email'=> 'agusDj@haha.com',
            'password' => 'agusdjfhajh12',
            'phone' => '085733488500',
            'address' => 'orhu Street',
            'gender'=> 'male',
            'role' => 'member'
        ]);   
        DB::table('users')->insert([
            'name' => 'Aiwy',
            'email'=> 'aiwy@haha.com',
            'password' => 'aiwksdf712',
            'phone' => '085730351304',
            'address' => 'oslo Street',
            'gender'=> 'male',
            'role' => 'member'
        ]);   
        DB::table('users')->insert([
            'name' => 'Amy Delia',
            'email'=> 'amyD@haha.com',
            'password' => 'amydd1278s',
            'phone' => '081934644449',
            'address' => 'hursun Street',
            'gender'=> 'Female',
            'role' => 'member'
        ]);   
        DB::table('users')->insert([
            'name' => 'Benny Tenges',
            'email'=> 'BennyT@haha.com',
            'password' => 'bent798123h',
            'phone' => '08179614832',
            'address' => 'bunyus Street',
            'gender'=> 'male',
            'role' => 'member'
        ]);   
        DB::table('users')->insert([
            'name' => 'Christiana Niowni',
            'email'=> 'ChsirtsN@haha.com',
            'password' => 'Cn419038h',
            'phone' => '085732016400',
            'address' => 'yolis Street',
            'gender'=> 'Female',
            'role' => 'member'
        ]);   
    }
}
