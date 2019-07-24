<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use Validator;

class ContactController extends Controller {
    public function contact(Request $request) {
        $input = $request->all();

        $validator = Validator::make($input, [
            'name' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);

        if($validator->fails()) {
            return response(json_encode([
                'status' => false,
                'errors' => $validator->errors()
            ]), 401);
        } else {

            $sent = Mail::send('emails.basic', $input, function($message) {
                $message->from( 'info@GraceAndTom.com', 'Website' );
                $message->to('TomAndGrace1212@gmail.com')->subject('New Message From Website');
            });

            return response(json_encode([
                'status' => true
            ]));
        }
    }
}