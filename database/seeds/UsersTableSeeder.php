<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
                'type_id' => 1,
                'first_name' => 'Thomas',
                'last_name' => 'Bird',
                'address_1' => '750 E Hibbard Rd',
                'city' => 'Owosso',
                'state' => 'MI',
                'zip' => 48867,
                'phone' => '313-410-3709',
                'email' => 'godoploid@gmail.com',
                'password' => Hash::make('seoul1984')
            ],
            [
                'account_id' => 1,
                'type_id' => 2,
                'first_name' => 'Grace',
                'last_name' => 'Choi',
                'address_1' => '750 E Hibbard Rd',
                'city' => 'Owosso',
                'state' => 'MI',
                'zip' => 48867,
                'phone' => '419-699-0548',
                'email' => 'tomandgrace1212@gmail.com',
                'password' => Hash::make('test')
            ]
        ]);
    }
}
