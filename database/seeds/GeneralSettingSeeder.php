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
            'address_1' => '2629 Alta Vista Dr',
            'address_2' => '',
            'city' => 'Ottawa',
            'state' => 'ON',
            'zipcode' => 'K1V 7T5',
            'phone_number' => '438-234-0918',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
