<?php

use Illuminate\Database\Seeder;

class AccoountUsersTableSeeder extends Seeder
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
                'account_id' => 1,
                'user_id' => 1
            ],
            [
                'account_id' => 1,
                'user_id' => 2
            ]
        ]);
    }
}
