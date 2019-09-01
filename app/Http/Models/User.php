<?php

namespace App\Http\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'account_id', 'type_id', 'first_name', 'last_name', 'title', 'description', 'address_1', 'address_2', 'city', 'state', 'zip', 'phone', 'email', 'password', 'profile_image', 'table_number', 'bridal_party_order', 'plus_one', 'plus_one_name', 'rsvp_source', 'rsvp', 'rsvp_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function accounts() {
        return $this->belongsToMany('App\Http\Models\Account', 'account_users');
    }
}
