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

        DB::table('food_items')->insert([
            'title' => 'Tostistos',
            'description' => '1 plate of potato chips and sauce',
            'image_url' => 'img/CHIPS.png',
            'price' => 6.99,
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Steak',
            'description' => '2 slices of steak with vegetables and pita bread',
            'image_url' => 'img/342-3422633_pork-entrees-steak-pork-png.png',
            'price' => 20.99,
            'category_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Steak and Baby Back Ribs',
            'description' => '2 slices of steak with baby back ribs and pita bread',
            'image_url' => 'img/342-3422633_pork-entrees-steak-pork-png.png',
            'price' => 22.99,
            'category_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Caesar Salad',
            'description' => '1 plate of salad',
            'image_url' => 'img/Salad-PNG-Image.png',
            'price' => 8.99,
            'category_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Blueberry Cheese Cake',
            'description' => '1 slice of blueberry cheesecake',
            'image_url' => 'img/106-1063654_blueberry-vanilla-cheesecake-vanilj-o-blbr-cheesecake.png',
            'price' => 5.99,
            'category_id' => 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Mango Sunrise Cocktail',
            'description' => '1 slice of mango and chateau wine',
            'image_url' => 'img/mango-sunrise.png',
            'price' => 8.99,
            'category_id' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Coke',
            'description' => '1 bottle of Coca-Cola',
            'image_url' => 'img/mango-sunrise.png',
            'price' => 8.99,
            'category_id' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Sprite',
            'description' => '1 bottle of Sprite',
            'image_url' => 'img/mango-sunrise.png',
            'price' => 8.99,
            'category_id' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Canada Dry Ginger Ale',
            'description' => 'Ginger Ale Soda',
            'image_url' => 'img/mango-sunrise.png',
            'price' => 8.99,
            'category_id' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
