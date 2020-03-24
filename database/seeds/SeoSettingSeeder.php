<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SeoSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seo_settings')->insert([
            'description' => "Anderson Burgers is an Canadian multinational chain of hamburger fast food restaurants. Headquartered in the national capital region of Ottawa. The company was founded in 1953 as Insta-Anderson Burger, an Ontario–based restaurant chain.",
            'keywords' => "Burgers, Local Burger, Anderson Burgers, Ottawa Burger, Ottawa Restaurant, Salads, Best Burgers in Ottawa",
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
