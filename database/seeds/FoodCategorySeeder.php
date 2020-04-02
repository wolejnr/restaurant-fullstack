<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_categories')->insert([
            'title' => 'Starters',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, temporibus! Aperiam aut labore fugit, voluptas eligendi dolorum et molestiae debitis assumenda asperiores ab delectus magnam optio dolorem quasi necessitatibus harum!',
            'image_url' => 'img/CHIPS.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'Burgers',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, temporibus! Aperiam aut labore fugit, voluptas eligendi dolorum et molestiae debitis assumenda asperiores ab delectus magnam optio dolorem quasi necessitatibus harum!',
            'image_url' => 'img/hamburger-and-fries-png-4.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'Entrees',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, temporibus! Aperiam aut labore fugit, voluptas eligendi dolorum et molestiae debitis assumenda asperiores ab delectus magnam optio dolorem quasi necessitatibus harum!',
            'image_url' => 'img/342-3422633_pork-entrees-steak-pork-png.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'Sides',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, temporibus! Aperiam aut labore fugit, voluptas eligendi dolorum et molestiae debitis assumenda asperiores ab delectus magnam optio dolorem quasi necessitatibus harum!',
            'image_url' => 'img/Salad-PNG-Image.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'Desserts',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, temporibus! Aperiam aut labore fugit, voluptas eligendi dolorum et molestiae debitis assumenda asperiores ab delectus magnam optio dolorem quasi necessitatibus harum!',
            'image_url' => 'img/106-1063654_blueberry-vanilla-cheesecake-vanilj-o-blbr-cheesecake.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'Drinks',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, temporibus! Aperiam aut labore fugit, voluptas eligendi dolorum et molestiae debitis assumenda asperiores ab delectus magnam optio dolorem quasi necessitatibus harum!',
            'image_url' => 'img/mango-sunrise.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
