<?php namespace App\Http\Controllers;

use App\Http\Models\User;

class ImportController extends Controller {
    public function csv_import() {
        $csv = [];

        $created_users = [];

        $file = fopen(app_path('Http/imports/guest-list.csv'), 'r');

        if($file === false) {
            throw new Exception('There was an error while trying to load csv');
        } else {
            while(($line = fgetcsv($file, 1000)) !== false) {
                $csv[] = $line;
            }
        }

        foreach($csv as $item) {
            $user = User::create([
                'first_name' => $item[0],
                'last_name' => $item[1],
                'address_1' => $item[2],
                'address_2' => $item[3],
                'city' => $item[4],
                'state' => $item[5],
                'zip' => $item[6],
                'phone' => $item[7],
                'email' => $item[8]
            ]);

            array_push($created_users, $user->toArray());
        }

        return response(json_encode($created_users));
    }
}