<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('general_settings')->insert([
            'site_title' => 'Anderson Burgers',
            'logo_image_url' => '/img/logo.png',
            'address_1' => '1200 Walkley Road',
            'address_2' => '',
            'city' => 'Ottawa',
            'state' => 'ON',
            'zipcode' => 'K2K1G3',
            'phone_number' => '438-234-0918',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
