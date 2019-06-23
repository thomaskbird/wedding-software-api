<?php

use Illuminate\Database\Seeder;

class AccoountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'user_id' => 1
            ]
        ]);
    }
}
