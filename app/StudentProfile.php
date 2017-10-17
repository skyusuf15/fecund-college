<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
	

class StudentProfile extends Model
{
	protected $fillable =[
		'fullname','email','note','facebook_id','linkedin_id','twitter_id','image'
	];
	
    //
}
