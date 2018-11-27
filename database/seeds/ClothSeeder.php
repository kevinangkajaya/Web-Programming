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
        DB::table('clothes')->insert(
        [
            'categoryID' => 1,
            'clothName' => 'Stussy Classic Logo Tee',
            'clothPrice' => 400000,
            'clothDescription' => 'Casual 30s cotton lifestyle t-shirt for boys',
            'clothStock' => 6,
            'clothDirectory' => '1.jfif',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);
            
            
        DB::table('clothes')->insert(
        [
            'categoryID' => 3,
            'clothName' => 'DEUS Venice Hoodie',
            'clothPrice' => 500000,
            'clothDescription' => 'Casual hoodie lifestyle t-shirt for boys and girls',
            'clothStock' => 3,
            'clothDirectory' => '2.jpg',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('clothes')->insert(
        [
            'categoryID' => 3,
            'clothName' => 'BAPE Tees',
            'clothPrice' => 400000,
            'clothDescription' => 'Casual 30s cotton lifestyle t-shirt for boys and girls',
            'clothStock' => 10,
            'clothDirectory' => '3.jpg',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('clothes')->insert(
        [
            'categoryID' => 2,
            'clothName' => 'Trasher KCUF T-Shirt',
            'clothPrice' => 400000,
            'clothDescription' => 'Casual 30s cotton lifestyle t-shirt for girls',
            'clothStock' => 5,
            'clothDirectory' => '4.jpg',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('clothes')->insert(
        [
            'categoryID' => 1,
            'clothName' => 'Trasher Yellow T-Shirt',
            'clothPrice' => 400000,
            'clothDescription' => 'Casual 30s cotton lifestyle t-shirt for boys',
            'clothStock' => 4,
            'clothDirectory' => '5.jpg',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('clothes')->insert(
        [
            'categoryID' => 1,
            'clothName' => 'Marvel Logo T-Shirt',
            'clothPrice' => 250000,
            'clothDescription' => 'Casual 30s cotton Marvel Edition t-shirt for boys',
            'clothStock' => 5,
            'clothDirectory' => '6.jpg',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('clothes')->insert(
        [
            'categoryID' => 1,
            'clothName' => 'Marvel Hulk T-Shirt',
            'clothPrice' => 200000,
            'clothDescription' => 'Casual 30s cotton Marvel Edition t-shirt for boys',
            'clothStock' => 3,
            'clothDirectory' => '7.jfif',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('clothes')->insert(
        [
            'categoryID' => 1,
            'clothName' => 'Batman Tees',
            'clothPrice' => 250000,
            'clothDescription' => 'Casual 30s cotton DCComics Series t-shirt for boys',
            'clothStock' => 12,
            'clothDirectory' => '8.jpg',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('clothes')->insert(
        [
            'categoryID' => 3,
            'clothName' => 'DC Comics Limited Tees',
            'clothPrice' => 400000,
            'clothDescription' => 'Casual 30s cotton DCComics Series t-shirt for boys and girls',
            'clothStock' => 5,
            'clothDirectory' => '9.jpg',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('clothes')->insert(
        [
            'categoryID' => 1,
            'clothName' => 'The Flash Tees',
            'clothPrice' => 200000,
            'clothDescription' => 'Casual 30s cotton DCComics Series t-shirt for boys',
            'clothStock' => 6,
            'clothDirectory' => '10.jfif',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('clothes')->insert(
        [
            'categoryID' => 2,
            'clothName' => 'Disney Raglon Red',
            'clothPrice' => 350000,
            'clothDescription' => 'Casual 30s cotton Disney Series t-shirt for girls',
            'clothStock' => 3,
            'clothDirectory' => '11.jpg',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('clothes')->insert(
        [
            'categoryID' => 2,
            'clothName' => 'Im Not Crazy Tees',
            'clothPrice' => 300000,
            'clothDescription' => 'Casual 30s cotton Disney Series t-shirt for girls',
            'clothStock' => 5,
            'clothDirectory' => '12.jpg',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('clothes')->insert(
        [
            'categoryID' => 1,
            'clothName' => 'Pologize Business Polo Shirt',
            'clothPrice' => 500000,
            'clothDescription' => 'Casual Officestyle for Mens',
            'clothStock' => 6,
            'clothDirectory' => '13.jpg',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('clothes')->insert(
        [
            'categoryID' => 1,
            'clothName' => 'Polo Knit Cashmere',
            'clothPrice' => 550000,
            'clothDescription' => 'Casual Officestyle for Mens',
            'clothStock' => 6,
            'clothDirectory' => '14.jpg',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('clothes')->insert(
        [
            'categoryID' => 1,
            'clothName' => 'ZARA Basics Suits',
            'clothPrice' => 800000,
            'clothDescription' => 'Formal Style for Mens',
            'clothStock' => 2,
            'clothDirectory' => '15.jpg',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('clothes')->insert(
        [
            'categoryID' => 1,
            'clothName' => 'ZARA Check Suit Blazer',
            'clothPrice' => 600000,
            'clothDescription' => 'Formal Style for Mens',
            'clothStock' => 6,
            'clothDirectory' => '16.jpg',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('clothes')->insert(
        [
            'categoryID' => 1,
            'clothName' => 'ZARA Black Jacket',
            'clothPrice' => 600000,
            'clothDescription' => 'Formal Casual Style for Mens',
            'clothStock' => 3,
            'clothDirectory' => '17.jpg',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('clothes')->insert(
        [
            'categoryID' => 1,
            'clothName' => 'Giordano Linen Sleeve Men',
            'clothPrice' => 500000,
            'clothDescription' => 'Casual Linen Fabric for Mens Office Lifestyle',
            'clothStock' => 3,
            'clothDirectory' => '18.jpg',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('clothes')->insert(
        [
            'categoryID' => 2,
            'clothName' => 'ZARA Tuxedo Woman Trim',
            'clothPrice' => 700000,
            'clothDescription' => 'Formal Style for Woman',
            'clothStock' => 5,
            'clothDirectory' => '19.jpg',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('clothes')->insert(
        [
            'categoryID' => 2,
            'clothName' => 'ZARA Woman Blazers',
            'clothPrice' => 550000,
            'clothDescription' => 'Casual Woman Office Lifestyle',
            'clothStock' => 2,
            'clothDirectory' => '20.jpg',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('clothes')->insert(
        [
            'categoryID' => 3,
            'clothName' => 'H&M Denim Bib',
            'clothPrice' => 450000,
            'clothDescription' => 'Denim Collection Couple Series',
            'clothStock' => 10,
            'clothDirectory' => '21.jpg',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('clothes')->insert(
        [
            'categoryID' => 3,
            'clothName' => 'KENZO Unisex Tees',
            'clothPrice' => 400000,
            'clothDescription' => 'Casual 30s cotton lifestyle t-shirt for boys and girls',
            'clothStock' => 6,
            'clothDirectory' => '22.jpg',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('clothes')->insert(
        [
            'categoryID' => 2,
            'clothName' => 'KENZO Tiger Shirt',
            'clothPrice' => 300000,
            'clothDescription' => 'Casual 30s cotton lifestyle t-shirt for girls',
            'clothStock' => 5,
            'clothDirectory' => '23.jpg',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('clothes')->insert(
        [
            'categoryID' => 3,
            'clothName' => 'KENZO Winter Mode',
            'clothPrice' => 500000,
            'clothDescription' => 'KENZO Winter Collection for Couple Series',
            'clothStock' => 4,
            'clothDirectory' => '24.jpg',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);    
    }
}
