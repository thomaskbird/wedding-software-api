<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Models\User;

class RsvpController extends Controller {

    public function rsvp_respond(Request $request) {
        $input = $request->all();

        $validator = Validator::make($input, [
            'phone' => 'required'
        ]);

        if($validator->fails()) {
            return response(json_encode([
                'status' => false,
                'errors' => $validator->errors()
            ]), 401);
        } else {
            $clean_phone = preg_replace('/[^0-9]/', '', $input['phone']);
            $user = User::where('phone', $clean_phone)->first();

            $user->rsvp = $input['coming'];
            $user->plus_one = $input['plusOne'];
            $user->plus_one_name = $input['plusOneName'];
            $user->rsvp_at = date('Y-m-d H:i:s');

            $user->save();

            return response(json_encode([
                'status' => true,
                'msg' => ['RSVP was successfully submitted']
            ]));
        }
    }
}