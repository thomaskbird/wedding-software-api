<?php namespace App\Http\Controllers;

use App\Http\Models\User;
use Illuminate\Http\Request;

use Validator;

class UserController extends Controller {
    public function guest_list() {
        $users = User::all();
        return response(json_encode([
            'guests' => $users->toArray()
        ]));
    }

    public function admin_toggle_rsvp(Request $request) {
        $input = $request->all();

        $validator = Validator::make($input, [
            'userId' => 'required',
            'key' => 'required'
        ]);

        if($validator->fails()) {
            return response(json_encode([
                'status' => false,
                'errors' => $validator->errors()
            ]), 401);
        } else {
            $user = User::find($input['userId']);

            $key = $input['key'];
            $user->$key = $input['val'];

            if($key === 'rsvp') {
                if($input['val'] === 'yes') {
                    $user->rsvp_at = date('Y-m-d H:i:s');
                } else {
                    $user->rsvp_at = null;
                }
            }

            $user->save();

            return response(json_encode([
                'status' => true,
                'data' => [
                    'msg' => ['Successfully updated user record '. $input['key']],
                    'user' => $user
                ]
            ]));
        }
    }
}