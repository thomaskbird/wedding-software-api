<?php namespace App\Http\Controllers;

use App\Http\Models\Song;

use Illuminate\Http\Request;

use Validator;

class MusicController extends Controller {
    public function song_request(Request $request) {
        $input = $request->all();

        $validator = Validator::make($input, [
            'artist' => 'required',
            'song' => 'required'
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
                'data' => [
                    'msg' => ['Song requested successfully'],
                    'song' => $song
                ]
            ]));
        }
    }

    public function music_requested() {
        $music = Song::all();
        return response(json_encode([
            'status' => true,
            'data' => [
                'songs' => $music
            ]
        ]));
    }

    public function toggle_song_approval($song_id, $val) {
        $val = is_string($val) && $val === 'null' ? null : $val;
        $song = Song::find($song_id);
        $song->approved = $val;

        if($val === 'yes') {
            $song->approved_at = date('Y-m-d H:i:s');
        } else {
            $song->approved_at = null;
        }

        $song->save();

        return response(json_encode([
            'status' => true,
            'data' => [
                'songs' => $song
            ]
        ]));
    }
}