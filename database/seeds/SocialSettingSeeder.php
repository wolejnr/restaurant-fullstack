<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SocialSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('social_settings')->insert([
            'facebook_url' => "https://www.facebook.com/burgerking/",
            'twitter_url' => "https://twitter.com/BurgerKing?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor",
            'instagram_url' => "https://www.instagram.com/burgerking/?hl=en",
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
