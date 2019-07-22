<?php namespace App\Http\Controllers;

use App\Http\Models\User;

class UserController extends Controller {
    public function guest_list() {
        $users = User::all();
        return response(json_encode([
            'guests' => $users->toArray()
        ]));
    }
}