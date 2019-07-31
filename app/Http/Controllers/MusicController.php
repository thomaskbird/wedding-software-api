<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

class MusicController extends Controller {
    public function song_request(Request $request) {
        $input = $request->all();

        $validator = Validator::make($input, [
            'name' => 'required',
            'phone' => 'required',
            'msg' => 'required'
        ]);

        if($validator->fails()) {
            return response(json_encode([
                'status' => false,
                'errors' => $validator->errors()
            ]), 401);
        } else {
            $song = Song::create($input);

            return response(json_encode([
                'status' => true,
                'data' => ['Song requested successfully']
            ]));
        }
    }
}