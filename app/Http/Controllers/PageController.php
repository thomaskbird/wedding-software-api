<?php namespace App\Http\Controllers;

use App\Http\Models\User;

class PageController extends Controller {

    public function page_data($slug) {
        if($slug === 'home') {
            $bride_groom = User::whereRaw('type_id = ? OR type_id = ?', [1,2])->get();

            print_r($bride_groom->toArray());
        } else {

        }
    }
}