<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'fname' => 'Tom',
            'lname' => 'Wilkinson',
            'email' => 'tw@gmail.com',
            'phone_number' => '4167890123',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
