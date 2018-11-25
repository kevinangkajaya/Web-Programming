<?php

use Illuminate\Database\Seeder;
use Carbon\carbon;

class ClothSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clothes')->insert([
            'categoryID' => 2,
            'clothName' => 'JACKET WITH CONTRASTING TRIM & BERMUDA SHORTS',
            'clothPrice' => 300000,
            'clothDescription' => 'Linen blend Bermuda shorts with a contrasting trim along the hems. They feature front pockets, false welt pockets in the back, front pleats and metal zip, inside button and hook fastening in the front.',
            'clothStock' => 2,
            'clothDirectory' => 'cloth.jpg',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('clothes')->insert([
            'categoryID' => 2,
            'clothName' => 'Silver Blouse',
            'clothPrice' => 500000,
            'clothDescription' => 'Very powerful color for night party',
            'clothStock' => 3,
            'clothDirectory' => 'cloth11.jpg',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('clothes')->insert([
            'categoryID' => 2,
            'clothName' => 'FLORAL PRINT WRAP JUMPSUIT',
            'clothPrice' => 250000,
            'clothDescription' => 'Flowing V-neck jumpsuit with short cape-style sleeves that cross in the front and tie at one side with a matching fabric bow. Features a central opening at the back, wide-leg trousers and button and back zip fastening hidden in the central seam.',
            'clothStock' => 30,
            'clothDirectory' => 'cloth3.jpg',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('clothes')->insert([
            'categoryID' => 2,
            'clothName' => 'ASYMETRIC TUNIC WITH BOW',
            'clothPrice' => 400000,
            'clothDescription' => 'Lightweight V-neck tunic with sleeves falling below the elbow. Features pleats on the waist with a matching tied bow detail, an asymmetric hem and an inside hook that fastens in the front.',
            'clothStock' => 20,
            'clothDirectory' => 'cloth4.jpg',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('clothes')->insert([
            'categoryID' => 2,
            'clothName' => 'EMBROIDERED BLOUSE WITH PERFORATIONS',
            'clothPrice' => 500000,
            'clothDescription' => 'Sleeveless round neck blouse with mini ruffle trims and ruffles on the arm holes. Features a lace trim on the chest and buttoned opening in the back.',
            'clothStock' => 30,
            'clothDirectory' => 'cloth6.jpg',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);  
        DB::table('clothes')->insert([
            'categoryID' => 1,
            'clothName' => 'Blue Long Sleeve Shirt',
            'clothPrice' => 270000,
            'clothDescription' => 'Blue and shiny.',
            'clothStock' => 30,
            'clothDirectory' => 'deeksha-original.jpeg',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);      
    }
}
