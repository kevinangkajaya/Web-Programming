<?php

use Illuminate\Database\Seeder;
use Carbon\carbon;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promo')->insert([
            'promoName' => 'promo_50_percent',
            'promoCode' => 'GZDMc-mGCzH-SDesb',
            'promoDisc' => 50,
            'startDate' => '2018-11-01',
            'endDate' => '2018-11-30',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('promo')->insert([
            'promoName' => 'promo_75_percent',
            'promoCode' => 'CCdcq-dfMdh-sdfsd',
            'promoDisc' => 75,
            'startDate' => '2018-11-01',
            'endDate' => '2018-11-30',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('promo')->insert([
            'promoName' => 'promo_99_percent',
            'promoCode' => 'Mjx-mtGGg-jakeC',
            'promoDisc' => 99,
            'startDate' => '2018-11-11',
            'endDate' => '2018-11-11',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);
    }
}
