<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_items')->insert([
            'title' => 'Texas Burger',
            'description' => '2 pounds lean ground beef, 6 slices American cheese, 2 large heads iceburg or romaine lettuce, 2 sliced tomatoes, sliced red onions',
            'image_url' => 'img/106-1063654_blueberry-vanilla-cheesecake-vanilj-o-blbr-cheesecake.png',
            'price' => 9.99,
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'BBQ Burger',
            'description' => '2 pounds lean ground beef, 6 slices American cheese, 2 large heads iceburg or romaine lettuce, 2 sliced tomatoes, sliced red onions',
            'image_url' => 'img/106-1063654_blueberry-vanilla-cheesecake-vanilj-o-blbr-cheesecake.png',
            'price' => 9.99,
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Andersons Burger',
            'description' => '2 pounds lean ground beef, 6 slices American cheese, 2 large heads iceburg or romaine lettuce, 2 sliced tomatoes, sliced red onions',
            'image_url' => 'img/106-1063654_blueberry-vanilla-cheesecake-vanilj-o-blbr-cheesecake.png',
            'price' => 9.99,
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
