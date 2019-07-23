<?php
$env = env('APP_ENV', 'dev');
if($env === 'dev') {
    $allowed_env = 'http://localhost:8075';
} else {
    $allowed_env = 'http://graceandtom.com';
}

header('Access-Control-Allow-Origin: '. $allowed_env);
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, User-Agent, authorization");

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Credential routes
route::post('login', ['as' => 'action_login', 'uses' => 'CredentialController@action_login']);
route::post('signup', ['as' => 'action_signup', 'uses' => 'CredentialController@action_signup']);
route::post('activate/{activation_code}', ['as' => 'account_user_activate', 'uses' => 'CredentialController@account_user_activate']);
route::post('forgot-password', ['as' => 'action_forgot_password', 'uses' => 'CredentialController@action_forgot_password']);
route::post('reset-password/{reset_token}', ['as' => 'action_reset_password', 'uses' => 'CredentialController@action_reset_password']);

route::get('page/{slug}', ['as' => 'page_data', 'uses' => 'PageController@page_data']);

route::post('rsvp-respond', ['as' => 'rsvp_respond', 'uses' => 'RsvpController@rsvp_respond']);

route::get('csv-import', ['as' => 'csv_import', 'uses' => 'ImportController@csv_import']);
route::get('convert-phones', ['as' => 'convert_phones', 'uses' => 'ImportController@convert_phones']);

route::get('guest-list', ['as' => 'guest_list', 'uses' => 'UserController@guest_list']);
/**
 * Protected routes
 * These routes utilize the apiToken middleware for authorization
 */
route::middleware(['apiToken'])->group(function() {

});