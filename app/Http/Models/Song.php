<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model {
    protected $fillable = [
        'account_id', 'title', 'artist', 'approved_at'
    ];
}