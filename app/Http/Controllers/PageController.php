<?php namespace App\Http\Controllers;

use App\Http\Models\User;

class PageController extends Controller {

    public function page_data($slug) {
        if($slug === 'home') {
            $bride_groom = User::whereRaw('type_id = ? OR type_id = ?', [1,2])->orderBy('type_id', 'DESC')->get();
            $bridal_party = User::whereRaw('type_id = ? OR type_id = ?', [4,5])->orderBy('bridal_party_order', 'ASC')->get();

            return response(json_encode([
                'brideGroom' => $bride_groom,
                'bridalParty' => $bridal_party,
            ]));
        } else {

        }
    }
}