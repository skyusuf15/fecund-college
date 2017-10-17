<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
	    protected $fillable = [
        'guest_name', 'email', 'message','status'
    ];
    //
}
